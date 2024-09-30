<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Welfare Info Form</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>


    <!-- Form to submit child welfare info -->
    <form action="{{ url('/child-welfare-info') }}" method="POST" class="max-w-sm mx-auto p-5">
        @csrf

        <!-- Display validation errors -->
        @if ($errors->any())
            <div id="errorMessage" class="bg-red-200 text-gray-500 p-5 my-5 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Success Message -->
        @if (session('success'))
            <div id="successMessage" class="bg-green-200 text-gray-500 p-5 my-5 rounded">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-lg font-extrabold mb-8">RACCO 3 STATISTICAL BOARD</h1>

        <h1 class="text-base font-bold mb-8">I. Number of Children Issued with CDCLAA</h1>
        <div>
            <label for="target_cdclaa" class="block mb-2 text-sm font-medium text-gray-900">Target CDCLAA:</label>
            <input type="number" id="target_cdclaa" name="target_cdclaa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="issued_cdlaa" class="block mb-2 text-sm font-medium text-gray-900">Issued CDCLAA:</label>
            <input type="number" id="issued_cdlaa" name="issued_cdlaa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="received_petitions_cdlclaa" class="block mb-2 text-sm font-medium text-gray-900">Received Petitions CDLCLAA:</label>
            <input type="number" id="received_petitions_cdlclaa" name="received_petitions_cdlclaa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="endorsed_petitions_nacc" class="block mb-2 text-sm font-medium text-gray-900">Endorsed Petitions NACC:</label>
            <input type="number" id="endorsed_petitions_nacc" name="endorsed_petitions_nacc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <h1 class="text-base font-bold mb-8">II. Number of Children Issued with PAPA/ORDER OF ADOPTION/ICA CLEARANCE</h1>
        
        <h1 class="text-base font-semibold mb-3">A. Number of Children Issued with PAPA</h1>
        <div>
            <label for="papa_presented_rmc" class="block mb-2 text-sm font-medium text-gray-900">PAPA Presented RMC:</label>
            <input type="number" id="papa_presented_rmc" name="papa_presented_rmc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>
        
        <div>
            <label for="papa_not_presented_rmc" class="block mb-2 text-sm font-medium text-gray-900">PAPA Not Presented RMC:</label>
            <input type="number" id="papa_not_presented_rmc" name="papa_not_presented_rmc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <h1 class="text-base font-semibold mb-3">B. Order Adoption</h1>
        <div>
            <label for="petition_domestic_adoption_act" class="block mb-2 text-sm font-medium text-gray-900">Petition Domestic Adoption Act:</label>
            <input type="number" id="petition_domestic_adoption_act" name="petition_domestic_adoption_act" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="simulated_birth_records_rectification_act" class="block mb-2 text-sm font-medium text-gray-900">Simulated Birth Records Rectification Act:</label>
            <input type="number" id="simulated_birth_records_rectification_act" name="simulated_birth_records_rectification_act" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <h1 class="text-base font-semibold mb-3">C. Number of Children Issued with Intercountry Adoption Clearance</h1>
        <div>
            <label for="issued_ica_clearance_regular" class="block mb-2 text-sm font-medium text-gray-900">Issued Clearance:</label>
            <input type="number" id="issued_ica_clearance_regular" name="issued_ica_clearance_regular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="issued_ica_clearance_relative" class="block mb-2 text-sm font-medium text-gray-900">Issued ICA Clearance:</label>
            <input type="number" id="issued_ica_clearance_relative" name="issued_ica_clearance_relative" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <h1 class="text-base font-bold mb-8">Foster Care</h1>

        <div>
            <label for="target_foster" class="block mb-2 text-sm font-medium text-gray-900">Target Foster:</label>
            <input type="text" id="target_foster" name="target_foster" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="foster_care_new_children" class="block mb-2 text-sm font-medium text-gray-900">Foster Care New Children:</label>
            <input type="text" id="foster_care_new_children" name="foster_care_new_children" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div>
            <label for="foster_children_subsidized_eligible" class="block mb-2 text-sm font-medium text-gray-900">Foster Children Subsidized Eligible:</label>
            <input type="text" id="foster_children_subsidized_eligible" name="foster_children_subsidized_eligible" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required><br><br>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </div>
    </form>
</body>
</html>

<script>
    // Set timeout to remove success message after 10 seconds
    setTimeout(function(){
        let successMessage = document.getElementById('successMessage');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 2000); // 10000 milliseconds = 10 seconds

    // Set timeout to remove error message after 10 seconds
    setTimeout(function(){
        let errorMessage = document.getElementById('errorMessage');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 2000); // 10000 milliseconds = 10 seconds
</script>