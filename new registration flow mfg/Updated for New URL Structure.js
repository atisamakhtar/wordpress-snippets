/**
 * It's php is in functions.php
 * Medical Form Gateway - Updated for New URL Structure
 * Safari Compatible | Handles Desktop + Mobile Forms
 * New destination: https://patient.thedocapp.net/
 */

(function() {
  'use strict';

  // ============================================
  // CONFIGURATION
  // ============================================
  const CONFIG = {
    // NEW BASE URL - Updated destination
    baseUrl: 'https://patient.thedocapp.net/',
    emailRegex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
    phoneRegex: /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/
  };

  // ============================================
  // UTILITY FUNCTIONS
  // ============================================

  /**
   * Convert string to hexadecimal encoding
   * @param {string} str - Input string
   * @returns {string} Hex encoded string
   */
  function stringToHex(str) {
    if (!str) return '';
    return Array.from(str)
      .map(char => char.charCodeAt(0).toString(16).padStart(2, '0'))
      .join('');
  }

  /**
   * Build the final redirect URL with new format
   * @param {string} email - User email
   * @param {string} phone - User phone (format: XXX-XXX-XXXX)
   * @returns {string} Complete redirect URL
   */
  function buildRedirectUrl(email, phone) {
    const emailHex = stringToHex(email);

    // NEW URL FORMAT: https://patient.thedocapp.net/?phone=000-000-0000&email=hexemail
    const params = new URLSearchParams({
      phone: phone,
      email: emailHex
    });

    return CONFIG.baseUrl + '?' + params.toString();
  }

  /**
   * Show or hide error message
   * @param {HTMLElement} element - Error message element
   * @param {boolean} show - Whether to show the error
   */
  function toggleError(element, show) {
    if (!element) return;

    if (show) {
      element.classList.add('error-visible');
      element.style.display = 'block';
    } else {
      element.classList.remove('error-visible');
      element.style.display = 'none';
    }
  }

  /**
   * Format phone number input as user types
   * @param {HTMLInputElement} input - Phone input element
   * @param {HTMLElement} errorElement - Error message element
   * @returns {boolean} Whether phone is valid
   */
  function formatPhoneInput(input, errorElement) {
    if (!input) return false;

    // Extract only digits, limit to 10
    const digits = input.value.replace(/\D/g, '').slice(0, 10);

    // Format as XXX-XXX-XXXX
    if (digits.length > 6) {
      input.value = digits.slice(0, 3) + '-' + digits.slice(3, 6) + '-' + digits.slice(6);
    } else if (digits.length > 3) {
      input.value = digits.slice(0, 3) + '-' + digits.slice(3);
    } else {
      input.value = digits;
    }

    // Validate format
    const isValid = CONFIG.phoneRegex.test(input.value);

    // Show error only if user has typed something and it's invalid
    if (input.value.length > 0) {
      toggleError(errorElement, !isValid);
    }

    return isValid;
  }

  /**
   * Validate email input
   * @param {HTMLInputElement} input - Email input element
   * @param {HTMLElement} errorElement - Error message element
   * @returns {boolean} Whether email is valid
   */
  function validateEmail(input, errorElement) {
    if (!input) return false;

    const value = input.value.trim();
    const isValid = CONFIG.emailRegex.test(value);

    // Show error only if user has typed something and it's invalid
    if (value.length > 0) {
      toggleError(errorElement, !isValid);
    }

    return isValid;
  }

  /**
   * Set button loading state
   * @param {HTMLElement} button - Submit button
   * @param {boolean} isLoading - Whether to show loading state
   */
  function setButtonLoading(button, isLoading) {
    if (!button) return;

    const textElement = button.querySelector('.btn-text');
    const arrowElement = button.querySelector('.btn-arrow');

    if (isLoading) {
      button.disabled = true;
      button.style.pointerEvents = 'none';
      button.setAttribute('aria-busy', 'true');

      if (textElement) {
        textElement.textContent = 'Processing...';
      }

      if (arrowElement) {
        // Replace arrow with spinner SVG
        arrowElement.innerHTML = '<circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="50" stroke-dashoffset="0"><animateTransform attributeName="transform" type="rotate" from="0 10 10" to="360 10 10" dur="1s" repeatCount="indefinite"/></circle>';
      }
    } else {
      button.disabled = false;
      button.style.pointerEvents = '';
      button.removeAttribute('aria-busy');

      if (textElement) {
        textElement.textContent = 'Get Started';
      }

      if (arrowElement) {
        // Restore arrow SVG
        arrowElement.innerHTML = '<path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"/>';
      }
    }
  }

  // ============================================
  // FORM INITIALIZATION
  // ============================================

  /**
   * Initialize a single form instance
   * @param {HTMLFormElement} form - The form element to initialize
   */
  function initializeForm(form) {
    if (!form) return;

    // Get form type (desktop or mobile)
    const formType = form.dataset.formType || form.className.replace('mfg-form-', '') || 'unknown';

    // Get form elements
    const emailInput = form.querySelector('input[name="email"]');
    const phoneInput = form.querySelector('input[name="phone"]');
    const submitButton = form.querySelector('.submit-btn');

    // Get error elements (try both ID and class selectors)
    const emailError = form.querySelector(`#mfg-email-error-${formType}`) ||
                       form.querySelector('.error-message[id*="email"]');
    const phoneError = form.querySelector(`#mfg-phone-error-${formType}`) ||
                       form.querySelector('.error-message[id*="phone"]');

    // Validate required elements
    if (!emailInput || !phoneInput || !submitButton) {
      console.error('MFG Form Error: Missing required elements in', formType, 'form');
      return;
    }

    // ============================================
    // EVENT LISTENERS - PHONE INPUT
    // ============================================
    phoneInput.addEventListener('input', function() {
      formatPhoneInput(this, phoneError);
    });

    phoneInput.addEventListener('blur', function() {
      // Validate on blur
      if (this.value.length > 0) {
        formatPhoneInput(this, phoneError);
      }
    });

    // ============================================
    // EVENT LISTENERS - EMAIL INPUT
    // ============================================
    emailInput.addEventListener('input', function() {
      validateEmail(this, emailError);
    });

    emailInput.addEventListener('blur', function() {
      // Validate on blur
      if (this.value.trim().length > 0) {
        validateEmail(this, emailError);
      }
    });

    // ============================================
    // EVENT LISTENERS - FORM SUBMISSION
    // ============================================
    form.addEventListener('submit', function(event) {
      // Always prevent default form submission
      event.preventDefault();
      event.stopPropagation();

      // Get trimmed values
      const email = emailInput.value.trim();
      const phone = phoneInput.value.trim();

      // Validate both fields
      const isEmailValid = validateEmail(emailInput, emailError);
      const isPhoneValid = formatPhoneInput(phoneInput, phoneError);

      // Force show errors if invalid
      if (!isEmailValid) {
        toggleError(emailError, true);
      }
      if (!isPhoneValid) {
        toggleError(phoneError, true);
      }

      // Stop if validation failed
      if (!isEmailValid || !isPhoneValid) {
        // Focus first invalid field
        if (!isEmailValid) {
          emailInput.focus();
        } else if (!isPhoneValid) {
          phoneInput.focus();
        }
        return false;
      }

      // ============================================
      // ALL VALID - PROCEED WITH SUBMISSION
      // ============================================

      // Show loading state
      setButtonLoading(submitButton, true);

      // Build the redirect URL with NEW format
      const redirectUrl = buildRedirectUrl(email, phone);

      // Log for debugging (remove in production if desired)
      console.log('MFG Form: Submitting', {
        formType: formType,
        email: email,
        phone: phone,
        emailHex: stringToHex(email),
        url: redirectUrl
      });

      // ============================================
      // CRITICAL FOR SAFARI COMPATIBILITY
      // Open popup SYNCHRONOUSLY in the same execution context
      // Must happen immediately during user click event
      // ============================================
      const newWindow = window.open(redirectUrl, '_blank', 'noopener,noreferrer');

      // Check if popup was blocked
      if (!newWindow) {
        // Popup was blocked - could show custom alert here
        setButtonLoading(submitButton, false);
        console.error('MFG Form: Popup blocked by browser');
        return false;
      }

      // Success! Reset button after delay
      setTimeout(function() {
        setButtonLoading(submitButton, false);

        // Optional: Clear the form after successful submission
        // Uncomment the lines below if you want to reset the form
        /*
        form.reset();
        toggleError(emailError, false);
        toggleError(phoneError, false);
        */
      }, 1500);

      return false;
    });

    // Log successful initialization
    console.log('MFG Form: Initialized successfully -', formType);
  }

  // ============================================
  // MAIN INITIALIZATION
  // ============================================

  /**
   * Initialize all forms on the page
   */
  function initializeAllForms() {
    // Find all medical forms (both desktop and mobile)
    const allForms = document.querySelectorAll('.mfg-form-desktop, .mfg-form-mobile, .medical-form');

    if (allForms.length === 0) {
      console.warn('MFG Form: No forms found on page');
      return;
    }

    console.log('MFG Form: Found', allForms.length, 'form(s)');

    // Initialize each form independently
    allForms.forEach(function(form, index) {
      try {
        initializeForm(form);
      } catch (error) {
        console.error('MFG Form: Error initializing form', index, error);
      }
    });
  }

  /**
   * Start the initialization process
   */
  function init() {
    // Check if DOM is already loaded
    if (document.readyState === 'loading') {
      // Wait for DOM to be ready
      document.addEventListener('DOMContentLoaded', initializeAllForms);
    } else {
      // DOM is already ready, initialize immediately
      initializeAllForms();
    }
  }

  // ============================================
  // START THE SCRIPT
  // ============================================
  init();

})();