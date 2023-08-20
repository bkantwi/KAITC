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
                    Step 2: Contact Information
                </h2>
                <div class="mt-6">
                    <!-- Questions for step 2 -->
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <!-- Add 3 more questions for step 2 -->
            </div>

            <!-- Step 3 -->
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
