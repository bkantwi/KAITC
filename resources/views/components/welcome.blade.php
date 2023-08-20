<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Kindly fill each step to complete your application. All the best!
    </h1>

    <form method="POST" action="">
        @csrf

        <div class="multistep-form">
            <!-- Step 1 -->
            <div class="step">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">
                    Step 1: GENERAL INFORMATION
                </h2>

                <h5 class="mt-6 text-xl font-semibold text-gray-900">
                    a. Personal details
                </h5>
                <div class="grid grid-cols-2 gap-6 mt-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" id="title" name="title" class="mt-1 p-2 w-full border rounded-md">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" id="dob" name="dob" class="mt-1 p-2 w-full border rounded-md">
                        </div>
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="family_name" class="block text-sm font-medium text-gray-700">Family Name</label>
                        <input type="text" id="family_name" name="family_name" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="country_of_residence" class="block text-sm font-medium text-gray-700">Country of Residence</label>
                        <input type="text" id="country_of_residence" name="country_of_residence" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="given_name" class="block text-sm font-medium text-gray-700">Given Name(s)</label>
                        <input type="text" id="given_name" name="given_name" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="country_of_birth" class="block text-sm font-medium text-gray-700">Country of Birth</label>
                        <input type="text" id="country_of_birth" name="country_of_birth" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="sex" class="block text-sm font-medium text-gray-700">Sex</label>
                        <select id="sex" name="sex" class="mt-1 p-2 w-full border rounded-md">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <h5 class="mt-6 text-xl font-semibold text-gray-900">
                        b. Contact Information
                    </h5>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="address_for_corres" class="block text-sm font-medium text-gray-700">Address for Correspondence</label>
                        <input type="text" id="address_for_corres" name="address_for_corres" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="tel_num" class="block text-sm font-medium text-gray-700">Telephone Nnumber</label>
                        <input type="tel" id="tel_num" name="tel_num" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="cell_num" class="block text-sm font-medium text-gray-700">Mobile (Cellular) Number</label>
                        <input type="tel" id="cell_num" name="cell_num" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" name="country" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                </div>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">
                    Step 2: Academic / Professional Qualifications
                </h2>
                <div class="mt-6">
                    <label for="from" class="block text-sm font-medium text-gray-700">Year Started</label>
                    <input type="text" id="from" name="from" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label for="to" class="block text-sm font-medium text-gray-700">Year Ended</label>
                    <input type="text" id="to" name="to" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label for="name_of_insti" class="block text-sm font-medium text-gray-700">Name of Institution</label>
                    <input type="text" id="name_of_insti" name="name_of_insti" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label for="insti_loc" class="block text-sm font-medium text-gray-700">Location of Institution</label>
                    <input type="text" id="insti_loc" name="insti_loc" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label for="programme" class="block text-sm font-medium text-gray-700">Programme</label>
                    <input type="text" id="programme" name="programme" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label for="class_awarded" class="block text-sm font-medium text-gray-700">Class Awarded</label>
                    <input type="text" id="class_awarded" name="class_awarded" class="mt-1 p-2 w-full border rounded-md">
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">
                    Step 2: Language Skills
                </h2>
                <div class="mt-6">
                    <label for="first_language" class="block text-sm font-medium text-gray-700">What is your first language?</label>
                    <input type="text" id="first_language" name="first_language" class="mt-1 p-2 w-full border rounded-md">
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">How often do you use English in a business context?</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_buss_context" value="Daily">
                            <span class="ml-2">Daily</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_buss_context" value="Weekly">
                            <span class="ml-2">Weekly</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_buss_context" value="Rarely">
                            <span class="ml-2">Rarely</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_buss_context" value="Never">
                            <span class="ml-2">Never</span>
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">How often do you use English in a study context?</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="end_study_context" value="Daily">
                            <span class="ml-2">Daily</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="end_study_context" value="Weekly">
                            <span class="ml-2">Weekly</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="end_study_context" value="Rarely">
                            <span class="ml-2">Rarely</span>
                        </label>

                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="end_study_context" value="Never">
                            <span class="ml-2">Never</span>
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">Competence in reading, speaking and writing in English is essential if you are to get
                        the most from the KAIPTC Masters course. We ask that you demonstrate competence
                        in English by one of the following criteria. Please indicate which:</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_competence" value="English is your native language">
                            <span class="ml-2">English is your native language</span>
                        </label>
                    </div>

                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_competence" value="You have graduated with a degree from an English-speaking university">
                            <span class="ml-2">You have graduated with a degree from an English-speaking university</span>
                        </label>
                    </div>

                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="eng_competence" value="You have worked in an English-speaking environment for at least two years">
                            <span class="ml-2">You have worked in an English-speaking environment for at least two years</span>
                        </label>
                    </div><br >

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="mt-6">
                            <label class="block text-sm font-medium text-gray-700">If English is not your native language, please outline your experience of working or studying in an English-speaking environment and indicate if, when and where you plan to take further English language training before starting the KAIPTC Masters course. Please list languages you can use, apart from English, indicating whether your ability is basic, competent or fluent in each:</label>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <div id="languages-container">
                                <!-- Dynamic input fields will be added here -->
                            </div>
                            <button type="button" id="add-language" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                                Add Language
                            </button>
                        </div>
                    </div>

                </div>


            </div>

            <!-- Final Step -->
            <div class="step">
                <h2 class="mt-6 text-xl font-semibold text-gray-900">
                    Step 3: Additional Information
                </h2>
                <div class="mt-6">
                    <!-- Questions for step 3 -->
                    <!-- Add 4 questions for step 3 -->
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="mt-8 flex justify-between">
                <button type="button" class="button-previous-step hidden">Previous</button>
                <button type="button" class="button-next-step">Next</button>
                <button type="submit" class="button-submit hidden">Submit</button>
            </div>
        </div>
    </form>
</div>


{{-- Multistep form script --}}
<script>
    const form = document.querySelector('.multistep-form');
    const steps = Array.from(form.querySelectorAll('.step'));
    const nextButtons = Array.from(form.querySelectorAll('.button-next-step'));
    const previousButtons = Array.from(form.querySelectorAll('.button-previous-step'));
    const submitButton = form.querySelector('.button-submit');

    let currentStep = 0;

    function showStep(stepNumber) {
        steps.forEach((step, index) => {
            if (index === stepNumber) {
                step.style.display = 'block';
            } else {
                step.style.display = 'none';
            }
        });
        currentStep = stepNumber;

        // Show/hide navigation buttons based on the current step
        if (currentStep === 0) {
            previousButtons.forEach(button => button.classList.add('hidden'));
        } else {
            previousButtons.forEach(button => button.classList.remove('hidden'));
        }

        if (currentStep === steps.length - 1) {
            nextButtons.forEach(button => button.classList.add('hidden'));
            submitButton.classList.remove('hidden');
        } else {
            nextButtons.forEach(button => button.classList.remove('hidden'));
            submitButton.classList.add('hidden');
        }
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', () => {
            showStep(currentStep + 1);
        });
    });

    previousButtons.forEach(button => {
        button.addEventListener('click', () => {
            showStep(currentStep - 1);
        });
    });

    // Start with the first step
    showStep(currentStep);
</script>

{{-- Dynamic language add script --}}
<script>
    // JavaScript to handle dynamic input field addition
    document.addEventListener("DOMContentLoaded", function () {
        const languagesContainer = document.getElementById("languages-container");
        const addLanguageButton = document.getElementById("add-language");

        // Function to create a new set of input fields
        function createLanguageFields() {
            const languageFields = document.createElement("div");
            languageFields.classList.add("mt-6");

            languageFields.innerHTML = `
                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                <input type="text" name="language[]" class="mt-1 p-2 w-full border rounded-md">

                <div class="col-span-2 sm:col-span-1 mt-2">
                    <label for="language_competence" class="block text-sm font-medium text-gray-700">Level of competence</label>
                    <select name="language_competence[]" class="mt-1 p-2 w-full border rounded-md">
                        <option value="Basic">Basic</option>
                        <option value="Competent">Competent</option>
                        <option value="Fluent">Fluent</option>
                    </select>
                </div>
            `;

            languagesContainer.appendChild(languageFields);
        }

        // Event listener for the "Add Language" button
        addLanguageButton.addEventListener("click", createLanguageFields);
    });
</script>
