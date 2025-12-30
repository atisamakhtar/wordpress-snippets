<?php

function myfloridagreen_faq_schema() {

    // FAQ Schema for Qualifying Conditions Page
    if (is_page('qualifying-conditions')) {
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who Qualifies for Medical Marijuana in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Anyone with a qualifying medical condition like anxiety, chronic pain, cancer, epilepsy, or PTSD can qualify for a medical marijuana card. Schedule an evaluation with a state-certified medical marijuana doctor to see if you qualify today. You can check your eligibility online by simply filling out a form on our website."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use medical marijuana for anxiety in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Medical marijuana can help manage anxiety. A licensed Florida physician can recommend it after an evaluation. Take control of your mental health now!"
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to get a medical marijuana card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Once your doctor approves you, you can typically get your medical marijuana card in 7-10 business days. Start with your same-day evaluation, and you could be approved to purchase cannabis products in no time!"
              }
            },
            {
              "@type": "Question",
              "name": "Can I use medical marijuana without a diagnosis in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, Florida law requires a verified medical condition and a physician's recommendation before you can purchase or use medical marijuana. Consult with a licensed physician to see if you're eligible for medical marijuana."
              }
            },
            {
              "@type": "Question",
              "name": "How do I qualify for medical marijuana in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Schedule an appointment with a certified physician who will evaluate your condition. Once they determine that you are eligible for medicinal use of Marijuana, they will give you a recommendation. Once you receive a recommendation and can apply for your medical marijuana card!"
              }
            }
          ]
        }
        </script>
        <?php
    }

    // FAQ Schema for FAQ Page (57 questions)
    if (is_page('faq')) {
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How do I get started? How do I see a doctor? How does this work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply go to our website which is myfloridagreen.com, click on any of the get started buttons, and choose the doctor that services your area. Please note that if you are transferring from another doctor you will need to sign up as a transfer, not a new patient. You'll fill out the secure application forms, which must contain all information asked as this is what is input into your Florida State Registry. Once that information is submitted, you'll then receive an email to schedule your appointment. We give you the opportunity to schedule your own appointment so that you can choose the best date/time that works for you. Once scheduled you'll come to your appointment, sign in and sign your consent forms, meet with an educator and then see your physician for any lingering questions you may have."
              }
            },
            {
              "@type": "Question",
              "name": "What are the costs involved with receiving my Medical Marijuana recommendation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Your state-required initial doctor's visit is $199. The physical ID card issued by the state is $77.75. Per Florida State Law, you must renew your recommendation with the doctor every 7 months. Your first 7-month certification will be $149. This includes unlimited support, five-star service, and maximum dosing for 7 months. If you are not approved, we offer a 100% money-back guarantee. You will be required by law to renew your card every year with the state and to be re-evaluated by your certifying physician every 7 months."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need a previous diagnosis to qualify for my card?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "MY FLORIDA GREEN has certified doctors across the state who can verify your symptoms and recommend an alternative with Medical Marijuana. While it is strongly preferred to have a pre-existing diagnosis, it is not legally required. Recommendations are issued at the Doctor's discretion and if he or she feels you do not qualify from debilitating emotional or physical symptoms, you will be denied."
              }
            },
            {
              "@type": "Question",
              "name": "Where can I pick up my medicine?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visit our Florida Medical Marijuana Dispensaries List to see all available products and determine which are best suited for you. If you don't have a dispensary nearby, all dispensaries also offer statewide delivery."
              }
            },
            {
              "@type": "Question",
              "name": "What routes of administration are currently available?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "In Florida, Medical Marijuana is available via: Vaporizer pens, Smokable flower, Capsules, Oral solutions, Concentrated oils, Topical creams."
              }
            },
            {
              "@type": "Question",
              "name": "Am I allowed to possess marijuana that I purchase on the black market?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Only medical marijuana products purchased from licensed Florida dispensaries can legally be possessed in Florida."
              }
            },
            {
              "@type": "Question",
              "name": "How do I show residency if I am a seasonal resident without a Florida driver's license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patients that qualify as seasonal must have a utility bill no more than two months old and a copy of either their property tax bill, voter's registration, mail from a financial institution, mail from a federal, state, county or municipal government agency, or lease/mortgage agreement."
              }
            },
            {
              "@type": "Question",
              "name": "What types of payment are accepted?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All major credit cards are accepted including Visa, MasterCard, American Express, and cash or check are all acceptable forms of payment."
              }
            },
            {
              "@type": "Question",
              "name": "Is insurance accepted?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "While Medical Marijuana is legal under Amendment 2 in Florida, it is still prohibited under federal law so we are unable to accept any insurance, Medicare, or Medicaid at this time."
              }
            },
            {
              "@type": "Question",
              "name": "What symptoms can be treated with Medical Marijuana?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Along with the conditions listed on our Qualification Page, Amendment 2 allows licensed Medical Marijuana physicians to recommend Medical Marijuana for medical conditions of the same kind or class as comparable to those listed above. Symptoms include: Chronic pain, Muscle spasms, Anxiety, Insomnia, Seizures, Nerve pain, Nausea, Loss of appetite, Spasticity, Abdominal pain and constipation, Menstrual pain."
              }
            },
            {
              "@type": "Question",
              "name": "How does Medical Marijuana work?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cannabinoids are the therapeutic components of cannabis. The two most commonly studied molecules are THC and CBD. Our bodies have an endocannabinoid system that produces our own internal cannabinoids similar to those found in cannabis. There are cannabinoid receptors throughout the human body and nervous system. Cannabinoids bind to these receptor sites and have been proven to promote homeostasis, or harmonic balance of the human body and its systems."
              }
            },
            {
              "@type": "Question",
              "name": "Is my medical information safe?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Your health information will be stored on HIPAA-compliant technology, protected by 256-bit encryption, and multiple layers of security."
              }
            },
            {
              "@type": "Question",
              "name": "Will I lose my concealed weapon permit if I obtain my Medical Marijuana Card?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "While this is a very controversial question, the short answer is NO! The Department of Health cannot communicate with the Department of Agriculture as this would violate a patient's HIPAA rights. No one has ever lost their right to carry in the state of Florida because of their Medical Marijuana Card. However, there are restrictions on buying new weapons in places such as Bass Pro Shop and Cabela's. Purchasing guns from private brokers and gun shows does not require the same forms and affidavits and is still legal. Fun Fact: Nikki Fried, the Commissioner of Agriculture, has publicly announced she is a Medical Marijuana patient and a concealed weapon permit holder."
              }
            },
            {
              "@type": "Question",
              "name": "Why should I choose My Florida Green?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "MY FLORIDA GREEN stands apart from most Medical Marijuana doctors in Florida by offering premier education, support, and guidance. Most of our patients are new to Medical Marijuana and need a partner who can help. This is especially true for the majority of our patients who are looking to get healed not high. We help by offering proven insights on how to balance CBD and THC for optimal results, how to choose the right strain for the right time of day, and the best dispensary for your needs. We've served thousands of Florida Medical Marijuana patients and have a five-star rating on Google with 300+ reviews."
              }
            },
            {
              "@type": "Question",
              "name": "What's the difference between low-THC cannabis and medical marijuana?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Low-THC cannabis is a product with trace amounts of THC and is essentially just CBD. This product will have very little to no psychoactive effect. Medical Marijuana or high THC will have psychoactive effects."
              }
            },
            {
              "@type": "Question",
              "name": "What's the difference between a recommendation and a prescription?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A marijuana doctor cannot prescribe marijuana because prescription drugs are regulated by the federal government, and since marijuana is still considered illegal under federal law, medical marijuana prescriptions are not allowed. The reason that marijuana doctors can recommend instead of prescribe is because a recommendation is considered freedom of speech and is protected by the First Amendment of the United States Constitution."
              }
            },
            {
              "@type": "Question",
              "name": "What locations can you get certified with My Florida Green?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our headquarters is in Naples. We also serve Sarasota, Saint Pete, Brevard, Sunrise, and all surrounding areas. We do hope to expand and serve more of The Sunshine State in the future."
              }
            },
            {
              "@type": "Question",
              "name": "Am I allowed to smoke medical marijuana?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Per Florida State Law, you are allowed 2.5 ounces of flower per 35 days. This cannot be changed to allow more, as before stated, that is Florida's law. This does not affect your dosing for other forms of intake."
              }
            },
            {
              "@type": "Question",
              "name": "Can someone else pick up my medication?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but they must be your licensed caregiver. If you need a caregiver added to your state profile, simply make this request during your appointment."
              }
            },
            {
              "@type": "Question",
              "name": "Am I safe to carry marijuana bud with my card?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Qualified patients can use medical marijuana at home or on private property. Public use is illegal, except for low-THC cannabis. Your qualified physician may order up to six 35-day supplies of medical marijuana in a form for smoking within each certification. Qualified patients may only possess up to 4 ounces of medical marijuana in a form for smoking at any given time."
              }
            },
            {
              "@type": "Question",
              "name": "Can a minor/child enroll in the program?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A minor must provide the department with a certified copy of a birth certificate or a current record of registration from a Florida K-12 school. The minor must also have a caregiver, such as a parent or legal guardian, who meets the requirements of subparagraph. A second opinion from an MD or DO is also required in order for a minor to be certified for Medical Marijuana."
              }
            },
            {
              "@type": "Question",
              "name": "Can any doctor in Florida certify a patient for Medical Marijuana?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, only physicians who are licensed with the Office of Medical Marijuana Use can certify a patient for Medical Marijuana. We urge caution when choosing a physician for your certification as many are inexperienced with Cannabis. Many will charge erroneous fees and have patients come back for unnecessary appointments."
              }
            },
            {
              "@type": "Question",
              "name": "Did the state get my check?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unfortunately, only the state can tell you that. You can reach them at 800-808-9580 and ask for an update. We strongly suggest all patients use the online portal with the Office of Medical Marijuana Use and pay by credit or debit card to expedite the process."
              }
            },
            {
              "@type": "Question",
              "name": "What is the status of my card?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our job is to help facilitate your medical marijuana registration with the State of Florida. Aside from that, unfortunately, we are unable to directly see the status of a pending application, and you must contact the state directly at 800-808-9580. You can also use the check my status page on our website which will send an email on your behalf requesting the status of your card."
              }
            },
            {
              "@type": "Question",
              "name": "Why do you charge before the doctor's visit and what is your refund policy if I'm not approved?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Due to past schedule conflicts, we require you to pay upfront for your appointment with the doctor. If for any reason you are not approved or satisfied with your visit, we offer a 100% money-back guarantee."
              }
            },
            {
              "@type": "Question",
              "name": "Does my card/recommendation expire?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Per Florida State Law, you must see a physician every 210 days (7 months) to renew your recommendation. Your physical card is good for one calendar year. Please note you will have to log in to the medical marijuana use registry to renew this. They will email you 45 days prior to expiration, so please be sure to check your spam folder or add them as a contact so that you receive the notification. Their website is https://mmuregistry.flhealth.gov/."
              }
            },
            {
              "@type": "Question",
              "name": "Can I fill out paperwork in the office?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our signup process is extremely user-friendly and on an automated platform at myfloridagreen.com. You'll click on get started and follow the prompts. It's best to complete on a laptop or desktop although our platform is mobile-friendly. If you're having difficulty, please call first to speak with a specialist by calling 239-307-5307 or 239-208-6545. If you're still having difficulty and are local to Naples, please feel free to stop by and one of our team members will be happy to assist you."
              }
            },
            {
              "@type": "Question",
              "name": "Can I grow my own Medical Marijuana?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Florida law only allows the licensed dispensing organizations to grow, process, and dispense marijuana."
              }
            },
            {
              "@type": "Question",
              "name": "Can I obtain my card while on probation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We urge you to check with your probation officer before applying; however, we've had many patients obtain their card without issues. Medical Marijuana was passed as a constitutional amendment. This means any state or government-funded agency that hinders a patient's access to Medical Marijuana once they've been certified would be violating that patient's constitutional right. If your probation officer is restricting your access, we suggest requesting this in writing from the probation officer on why you cannot use Medical Marijuana when you are, in fact, a legal patient. If you are a qualified patient with a qualifying condition, it is your constitutional right to use Medical Marijuana as an alternative."
              }
            },
            {
              "@type": "Question",
              "name": "What mailing address do I use to send my state fee check?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Office of Medical Marijuana Use's address is PO Box 31313 Tampa, FL 33631. We'll provide you with a pre-addressed envelope during your visit if you'd like. Please note that this payment method is the longest and, in some cases, has been known to take up to 2 months. Again, we strongly urge all patients to use the online portal to complete your state profile: https://mmuregistry.flhealth.gov."
              }
            },
            {
              "@type": "Question",
              "name": "What Medical Marijuana products should I use or what do you suggest?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "During your appointment, your educator will go over all routes accessible to you. Since there isn't a one-product-fits-all approach, we suggest experimenting by starting low, going slow, and finding out what products work best for you and your individual needs. Our Patient Guide on the website is a great resource for you to read about the effects and details of specific methods to use."
              }
            },
            {
              "@type": "Question",
              "name": "Will this affect my job?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Amendment 2 was passed as a constitutional amendment, so any state or government-funded agency that attempts to prevent you from using your medicine is violating your constitutional rights. However, we urge all patients to discuss with their employer if they are concerned about testing positive for THC on a drug test. Medical Marijuana is still new to Florida, and employers are still adjusting policies."
              }
            },
            {
              "@type": "Question",
              "name": "Who has access to my medical marijuana records?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Your health records are protected by HIPAA. Only My Florida Green physicians, The Florida Department of Health, and Law Enforcement (if you get stopped or questioned while possessing medical marijuana)."
              }
            },
            {
              "@type": "Question",
              "name": "Are you the doctor?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. However, you will meet the certifying physician at your appointment. All MY FLORIDA GREEN staff members are very experienced with Medical Cannabis and can answer many of the questions you may have. Rest assured, though, you will be meeting with the physician."
              }
            },
            {
              "@type": "Question",
              "name": "I submitted my form, but it didn't go through. How do I proceed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Please scroll up the page and make sure that all sections of the form are complete. Any empty fields will be highlighted in red and will prevent the form from being submitted. In many cases, using a phone or tablet will cause this problem. If you're still having problems and using a desktop or laptop hasn't fixed the problem, please feel free to give us a call."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use my Medical Marijuana license from another state?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unfortunately, Florida does not accept medical marijuana patients certified in other states. However, if you can prove residency and you have a qualifying condition, we can easily get you certified in Florida."
              }
            },
            {
              "@type": "Question",
              "name": "Do you offer virtual doctor visits?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unfortunately, virtual visits are no longer legal in Florida. However, they may be reauthorized at some point in the future. We will, however, be offering renewals with our educators in the future."
              }
            },
            {
              "@type": "Question",
              "name": "How long will this process take before I can purchase from a dispensary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patients should expect a 10-14 day application processing time from The Office of Medical Marijuana Use to issue your approval. Once you have this notification and you have received your recommendation from a My Florida Green Doctor, you will be able to visit or place a delivery order from any approved dispensary. For updates on your file, please call 800-808-9580 or use the MY FLORIDA GREEN Check My Status app."
              }
            },
            {
              "@type": "Question",
              "name": "Can I talk to the doctor?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "We don't book calls with the doctor. However, we can have one of our educators reach out to you if you'd like. If they're unable to answer your question or you'd rather only speak with the doctor, we will get your name and number, what the call is in regard to, and have the doctor give you a call back at their discretion."
              }
            },
            {
              "@type": "Question",
              "name": "Why do you ask for my social security number?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "As a courtesy to you, we register you on the State of Florida's Medical Marijuana Use Registry. Many doctors in the area leave this step up to you; however, the process can be a bit confusing, so we have taken it upon ourselves to help you get set up in the approval process. The State of Florida requires your social security number to identify you, so in turn, we need that information to create your state profile. If this information is left out or input incorrectly in your profile, we will not be able to register you, and it will prolong your approval process. Please note that all health information will be stored on HIPAA-compliant technology, protected by 256-bit encryption, and multiple layers of security."
              }
            },
            {
              "@type": "Question",
              "name": "How much is your transfer fee? As well as the renewal?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Both are the same. We charge $149.00 for re-certifications and patient transfers. Most patient transfers need the My Florida Green education on the medicinal benefits of medical marijuana and how to incorporate it into their everyday life."
                }
            },
            {
            "@type": "Question",
            "name": "How much is it?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "First-time patients will pay $199.00 for the appointment. This will give you unrestricted access with all routes to administer. Transfer patients will pay $149.00 with the same access. 7-month follow-ups are $149 with unrestricted access."
            }
            },
            {
            "@type": "Question",
            "name": "I cancelled my appointment, how can I reschedule it?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "If you have already paid for your appointment and cancelled it, you will need to give us a call to reschedule. The system does not recognize that you’ve already paid and will prompt you to do so again. Please, give us a call so that you are not charged twice and so that we can get you back on the schedule. If you cancelled an appointment and received a refund, you can give us a call to send you the scheduling link and you can reschedule and pay for a date/time that best meets your needs."
            }
            },
            {
            "@type": "Question",
            "name": "Why did the state deny my application?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Unfortunately, we cannot answer that for you. We are not The Office of Medical Marijuana Use. As a courtesy to all of our patients, we help you at your initial appointment to get your profile set up with them. Afterwards, if they send you an email with a denial, the reason is clearly stated in that email. You can log into your state profile and rectify the situation there. You can also reach them at 800-808-9580."
            }
            },
            {
            "@type": "Question",
            "name": "Can I change doctors?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patients have the right to change doctors at any time. You can log into your profile on the OMMU registry here: https://mmuregistry.flhealth.gov/. Log in with your email and password (if you do not know your password, reset it). Once logged in, click on “Your Profile,” then “Manage Profile Details,” then choose to “Leave Your Physician” and save changes. Once this is done, the new physician can assign your patient profile to themselves and create your new order and certification."
            }
            },
            {
            "@type": "Question",
            "name": "Can I make an appointment to renew my recommendation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "If you would like to renew and haven’t already received an email to do so, please give us a call so that we may send you the scheduling link. We send you a link to schedule yourself so that you may choose the best date and time for you and your schedule. If you’d like to schedule over the phone, that can be arranged as well."
            }
            },
            {
            "@type": "Question",
            "name": "What states are legal?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Florida dispensaries do not accept medical IDs from any other state. However, to answer the question, these are the states currently established: Alaska, Arizona, Arkansas, California, Colorado, Connecticut, Delaware, Florida, Hawaii, Illinois, Louisiana, Maine, Maryland, Massachusetts, Michigan, Minnesota, Missouri, Montana, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, Utah, Vermont, Washington, Washington, DC, and West Virginia."
            }
            },
            {
            "@type": "Question",
            "name": "Why is it only for 7 months? Most physicians are for 1 year. I live in Naples and would prefer to go here than have to go to Miami.",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Per SB8-A, Florida law requires patients to be seen by their certifying physician every 7 months or 210 days. No certifying physician licensed with the state of Florida and The Office of Medical Marijuana Use can certify a patient for Medical Marijuana past 210 days or 7 months legally. We didn’t write the law, but we certainly must follow it."
            }
            },
            {
            "@type": "Question",
            "name": "Fax numbers",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our fax number is 866-920-1840."
            }
            },
            {
            "@type": "Question",
            "name": "If I don't qualify, do I get my money back?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "100%, we will refund any and all patients who do not qualify for the program."
            }
            },
            {
            "@type": "Question",
            "name": "Make an appointment",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our appointment process starts online. From our homepage, click on “Get Started” or visit myfloridagreen.com/find-florida-medical-marijuana-doctor/ directly. Choose your location and fill in the application."
            }
            },
            {
            "@type": "Question",
            "name": "Schedule my 7-month appointment",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "The power is in your hands to schedule your 7-month appointment. Visit our How to Maintain Your Florida Medical Marijuana Card page to learn more."
            }
            },
            {
            "@type": "Question",
            "name": "I am Canadian. Seasonal resident in Naples, Florida. I have a Florida State \"temporary driver's license\" that I renew annually. I have a home here and I spend approximately 120 days a year in Florida. Do I qualify, assuming my medical condition is valid?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Your temporary ID from Florida will work. This is proof of residence."
            }
            },
            {
            "@type": "Question",
            "name": "My certifying doctor just told me that chronic pain (osteoarthritis) would no longer qualify for certification and that I will not be able to be re-certified this coming March. My dispensary is not aware of this change in Florida policy. Can you provide clarity?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Chronic Pain by itself is NOT a qualifying condition. In order to qualify under Chronic Pain only, it needs to be enumerated by a qualifying condition, which is confusing. Here’s an example: Chronic pain will qualify if the pain is caused by a cancer tumor being removed. Osteoarthritis will qualify under the “other like kind or class” section of the law here in Florida. Please let us know if we can help you in any way."
            }
            },
            {
            "@type": "Question",
            "name": "How do I get my money back for a cancelled appointment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply send us an email for your refund: Info@myfloridagreen.com."
            }
            },
            {
            "@type": "Question",
            "name": "I'm told re-certification is free for Vets, true?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YES! We recently rolled out our Veteran program. All 7-month follow-ups are on us, providing a Veteran patient has established care with My Florida Green. If you are a transfer patient, you will need to click on “Patient Transfer” and pay the 149 first. We invest a great deal of time and effort in every patient who joins the My Florida Green platform. The 7-month follow-ups will be free of charge. If you are a veteran who has been on our platform, simply send us an email: Info@myfloridagreen.com. Thank you for your service!"
            }
            },
            {
            "@type": "Question",
            "name": "Are you able to obtain a medical marijuana card if you are a licensed real estate agent in Florida?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Of course, you can! Your Medical Marijuana license is held with the Department of Health. This record cannot be exposed as that would be a HIPAA violation."
            }
            }
             ]
        }
        </script>
        <?php
    }

	// FAQ Schema for How to Get Medical Marijuana Card Page
    if (is_page('how-to-get-medical-marijuana-card-florida')) {
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What qualifies you for a medical card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "In Florida, if you want to get a medical marijuana card, you must: Be a permanent or seasonal Florida resident, Have a qualifying health condition, Have a proof of identity, An MMJ doctor recommendation."
              }
            },
            {
              "@type": "Question",
              "name": "How much does it cost to get a medical marijuana card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The medical marijuana card processing fee is $75, and a $2.75 convenience fee applies to each online payment. So, a total of $77.75 is the total application processing cost. Apart from this, you have to pay the physician's fee, which is $169."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fastest way to get a medical card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The fastest way to get a Florida medical card is through MY FLORIDA GREEN. We schedule your appointment with a licensed doctor, and you can submit your application within a few days. In about two weeks, you'll receive your card that opens the doors to buying cannabis legally."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get a medical marijuana card online in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can get a medical marijuana card online in Florida. However, first, you need to visit a weed doctor in person to qualify and get a recommendation that is necessary for getting a card. From then on, your physician will submit your application online through the Florida Medical Marijuana Use Registry (MMUR)."
              }
            },
            {
              "@type": "Question",
              "name": "What are the qualifying conditions for a medical card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patients with various qualifying conditions can apply for a medical marijuana card in Florida. Some of the qualifying conditions include: Chronic Pain, Anxiety, Nausea, Cancer, Diabetes."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cheapest way to get a medical card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The cheapest way to get a med card online is through MY FLORIDA GREEN. We have state-licensed doctors with an affordable fee who guide and walk you through the application process."
              }
            }
          ]
        }
        </script>
        <?php
    }

    // FAQ Schema for Dispensaries Page
    if (is_page('dispensaries')) {
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Are there marijuana dispensaries in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Florida is home to hundreds of licensed medical marijuana dispensaries across the state. Whether you're in Naples, Miami, Tampa, Orlando, or Jacksonville, you can easily find a nearby dispensary ready to serve patients with high-quality cannabis products."
              }
            },
            {
              "@type": "Question",
              "name": "Do dispensaries in Florida offer any discounts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! Florida dispensaries often offer discounts, especially for new patients, veterans, seniors, and returning customers. Keep an eye out for special promotions!"
              }
            },
            {
              "@type": "Question",
              "name": "Can people without medical marijuana cards enter a dispensary in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, you need a medical marijuana card to enter a marijuana dispensary. Florida dispensaries are for state-registered patients only. However, getting your medical marijuana card is quick and easy, once approved, you can shop at any licensed dispensary across Florida the same day!"
              }
            },
            {
              "@type": "Question",
              "name": "What products can I purchase at a Florida dispensary?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can buy a variety of products at Florida dispensaries! From flowers and edibles to vapes, tinctures, and topicals. Whether you're looking for pain relief, relaxation, or better sleep, you'll find exactly what fits your needs."
              }
            },
            {
              "@type": "Question",
              "name": "Can I find dispensaries that offer same-day pickup in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can! Many dispensaries in Florida offer same-day pickup and even home delivery options. Simply place your order online, and your products will be ready for pickup in just a few hours."
              }
            }
          ]
        }
        </script>
        <?php
    }

	if (is_page('marijuana-doctor')) { // Replace with your page slug
        ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who Qualifies for Medical Marijuana in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Anyone with a qualifying medical condition like anxiety, chronic pain, cancer, epilepsy, or PTSD can qualify for a medical marijuana card. Schedule an evaluation with a state-certified medical marijuana doctor to see if you qualify today. You can check your eligibility online by simply filling out a form on our website."
              }
            },
            {
              "@type": "Question",
              "name": "Can I use medical marijuana for anxiety in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! Medical marijuana can help manage anxiety. A licensed Florida physician can recommend it after an evaluation. Take control of your mental health now!"
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to get a medical marijuana card in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Once your doctor approves you, you can typically get your medical marijuana card in 7–10 business days. Start with your same-day evaluation, and you could be approved to purchase cannabis products in no time!"
              }
            },
            {
              "@type": "Question",
              "name": "Can I use medical marijuana without a diagnosis in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, Florida law requires a verified medical condition and a physician's recommendation before you can purchase or use medical marijuana. Consult with a licensed physician to see if you're eligible for medical marijuana."
              }
            },
            {
              "@type": "Question",
              "name": "How do I qualify for medical marijuana in Florida?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Schedule an appointment with a certified physician who will evaluate your condition. Once they determine that you are eligible for medicinal use of Marijuana, they will give you a recommendation. Once you receive a recommendation and can apply for your medical marijuana card!"
              }
            }
          ]
        }
        </script>
        <?php
    }

	if (is_front_page() || is_home()) {
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I get a medical marijuana card in Florida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To get your medical marijuana card in Florida, you must first make an appointment with a certified marijuana doctor in Florida. The doctor will write you a referral and add your name to the Medical Marijuana Use Registry if you match the requirements. You will need to send your application to the Florida Department of Health. You will need to show proof of residency, upload a picture, and pay a $75 application fee. After your application is approved, you will get your card, which will let you buy medicinal marijuana from licensed dispensaries."
          }
        },
        {
          "@type": "Question",
          "name": "Can I use my medical marijuana card in other states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, you can only use your medical marijuana card in the state where you are certified. If you have a Florida medical marijuana card, you cannot purchase marijuana in other states with that card. Certain states with reciprocal agreements may let you utilize your out-of-state card, if you meet specific conditions. But these laws can change, and they do so often."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to get a medical marijuana recommendation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In Florida, getting a medical marijuana recommendation is usually quick. The process starts with consultation with the certified marijuana doctor. After evaluation most patients are entered into the state registry the same day. Once you submit your application with the required documents and $75 state fee, approval takes around 5 to 10 business days."
          }
        },
        {
          "@type": "Question",
          "name": "How much does it cost to get a medical marijuana card in Florida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "At My Florida Green, getting a medical marijuana card in Florida is simple and affordable. We charge just $169 for the doctor's evaluation. Once approved, you will need to pay the standard $75 state fee for your medical marijuana card in Florida. That means you can get started for only $244 total, making it one of the most cost-effective options in Florida."
          }
        },
        {
          "@type": "Question",
          "name": "Can I renew my medical marijuana card online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, in Florida, you can easily renew your medical marijuana card online. Simply log in to the Medical Marijuana Use Registry, complete the renewal process, and pay the required fee. However, you must still have an active physician certification from a qualified marijuana doctor to complete the process."
          }
        },
        {
          "@type": "Question",
          "name": "How do I get started with My Florida Green?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "To get started with My Florida Green, schedule an appointment with one of our certified physicians. After a consultation, if you qualify, you will receive a recommendation from the certified marijuana doctor. Once approved, the compassionate patient advocates at My Florida Green will guide you through the process to obtain your medical marijuana card without delay."
          }
        },
		{
          "@type": "Question",
          "name": "What is the fastest way to get a medical card in Florida?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The fastest way to get a medical marijuana card in Florida is to book an in-person appointment with a state-certified physician (services like My Florida Green offer same-day evaluations). The doctor will evaluate you for qualifying conditions and add you to the Medical Marijuana Use Registry (MMUR). Once approved, you can immediately apply online at mmuregistry.flhealth.gov using your Florida ID and paying the $75 state application fee. Approval usually takes 5–10 business days, and you can start purchasing from licensed dispensaries as soon as your temporary digital card is issued. For more information, visit mmuregistry.flhealth.gov or call 800-808-9580."
          }
        }
      ]
    }
    </script>
    <?php
}

}
add_action('wp_head', 'myfloridagreen_faq_schema');