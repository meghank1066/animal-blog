{{-- <!DOCTYPE html>
<html>
<head>
    <title>Pet Matching Form</title>
</head>
{{-- <body>


// $petSuggestions = [
//     'Dog' => [
//         'activity' => 'active',
//         'allergies' => 'no',
//         'time' => ['moderate', 'a lot'],
//         'size' => 'medium',
//         'special_needs' => 'no',
//         'activity_level' => 'active',
//         'space_available' => 'medium_space',
//         'other_pets' => 'yes',
//         'image' => 'dog.jpg',
//     ],
//     'Cat' => [
//         'activity' => 'calm',
//         'allergies' => 'no',
//         'time' => ['moderate', 'a lot'],
//         'size' => 'medium',
//         'special_needs' => 'no',
//         'activity_level' => 'moderate',
//         'space_available' => 'medium_space',
//         'other_pets' => 'yes'
//     ],
//     'Rabbit' => [
//         'activity' => 'calm',
//         'allergies' => 'no',
//         'time' => ['moderate', 'a lot'],
//         'size' => 'small',
//         'special_needs' => 'no',
//         'activity_level' => 'sedentary',
//         'space_available' => 'medium_space',
//         'other_pets' => 'yes'
//     ],
//     'Fish' => [
//         'activity' => 'calm',
//         'allergies' => 'yes',
//         'time' => ['little', 'moderate', 'a lot'],
//         'size' => 'small',
//         'special_needs' => 'no',
//         'activity_level' => 'sedentary',
//         'space_available' => 'small_space',
//         'other_pets' => 'no'
//     ],
//     'Hamster' => [
//         'activity' => 'active',
//         'allergies' => 'no',
//         'time' => ['little'],
//         'size' => 'small',
//         'special_needs' => 'no',
//         'activity_level' => 'sedentary',
//         'space_available' => 'small_space',
//         'other_pets' => 'no'
//     ]
// ];

// Get user's preferences from the form
// $activity = $_POST['activity'] ?? '';
// $allergies = $_POST['allergies'] ?? '';
// $time = $_POST['time'] ?? '';
// $size = $_POST['size'] ?? '';
// $specialNeeds = $_POST['special_needs'] ?? '';
// $activityLevel = $_POST['activity_level'] ?? '';
// $spaceAvailable = $_POST['space_available'] ?? '';
// $otherPets = $_POST['other_pets'] ?? '';

// // Find pet suggestions based on user's preferences
// $matchedPets = [];
// foreach ($petSuggestions as $pet => $characteristics) {
//     if (
//         $activity === $characteristics['activity'] &&
//         $allergies === $characteristics['allergies'] &&
//         in_array($time, $characteristics['time']) &&
//         $size === $characteristics['size'] &&
//         $specialNeeds === $characteristics['special_needs'] &&
//         $activityLevel === $characteristics['activity_level'] &&
//         $spaceAvailable === $characteristics['space_available'] &&
//         $otherPets === $characteristics['other_pets']
//     ) {
//         $matchedPets[] = $pet;
//     }
// }

// // If no matching pets are found, suggest a random pet
// if (empty($matchedPets)) {
//     $matchedPets[] = array_rand($petSuggestions);
// }


?> --}}
@extends('layouts.app')

@section('content')
<main class="flex items-center justify-center min-h-screen background-image">
    <div class="max-w-2xl w-full p-8 rounded-lg shadow-lg quiz-section" style="background-color: #a27754; padding-top: 40px; padding-bottom: 40px; color: black;">
        <form method="post" action="{{ route('quiz.match') }}" class="quiz-section">

            @csrf
            {{-- https://laravel.com/docs/11.x/csrf reference using csrf token for security --}}
            <div class="mb-4">
                <label class="block text-white mb-2">1. Are you an active or calm person?</label>
                
                <label class="radio-label"><input type="radio" name="activity" value="active"> Active</label>
                    <label class="radio-label"><input type="radio" name="activity" value="calm"> Calm</label>
                
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">2. Do you have any allergies?</label>
                <label class="radio-label"><input type="radio" name="allergies" value="yes"> Yes</label>
                <label class="radio-label"><input type="radio" name="allergies" value="no"> No</label>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">3. How much time can you dedicate to pet care?</label>
                <label class="radio-label"><input type="radio" name="time" value="little"> Little
                    <label class="radio-label"><input type="radio" name="time" value="moderate"> Moderate
                        <label class="radio-label"><input type="radio" name="time" value="a lot"> A lot
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">4. What size of pet are you interested in?</label>
                <label class="radio-label"><input type="radio" name="size" value="small"> Small
                    <label class="radio-label"><input type="radio" name="size" value="medium"> Medium
                        <label class="radio-label"><input type="radio" name="size" value="large"> Large
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">5. Are you open to adopting a pet with special needs?</label>
                <label class="radio-label"><input type="radio" name="special_needs" value="yes"> Yes
                    <label class="radio-label"><input type="radio" name="special_needs" value="no"> No
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">6. How active are you?</label>
                <label class="radio-label"><input type="radio" name="activity_level" value="sedentary"> Sedentary (little physical activity)<br>
                    <label class="radio-label"><input type="radio" name="activity_level" value="moderate"> Moderate (regular exercise)<br>
             <label class="radio-label"><input type="radio" name="activity_level" value="active"> Active (frequent exercise or sports)<br>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">7. How much space do you have available for your pet to play?</label>
                <label class="radio-label"><input type="radio" name="space_available" value="small_space"> Small space (e.g., apartment)<br>
                    <label class="radio-label"><input type="radio" name="space_available" value="medium_space"> Medium space (e.g., house with yard)<br>
                        <label class="radio-label"><input type="radio" name="space_available" value="large_space"> Large space (e.g., rural property)<br>
            </div>
            <div class="mb-4">
                <label class="block text-white mb-2">8. Do you have any other pets at home?</label>
                <label class="radio-label"><input type="radio" name="other_pets" value="yes"> Yes
                    <label class="radio-label"><input type="radio" name="other_pets" value="no"> No
            </div>
            <button type="submit" class="buttonsubmit">Submit</button>
        </form>
        <style>
           .radio-label {
        display: inline-block;
        margin-right: 10px;
        color: white;
    }

    .radio-label input[type="radio"] {
        margin-right: 5px;
    }

    .buttonsubmit {
        appearance: none;
        border: 2px solid white;
        color: white;
        padding: 10px 20px;
        margin-right: 10px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
    }

    .buttonsubmit:hover {
        background-color: white;
        border: 2px solid #a27754;
        color: #a27754;
    }
            </style>
    </div>
</main>
@endsection
    
