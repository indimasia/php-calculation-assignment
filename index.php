<?php
    $calculate = calculate([1,5,4,3,2,4,5,5]);

    function calculate($listOfInteger) {
        $min = min($listOfInteger);
        $max = max($listOfInteger);
        $odd = array_filter($listOfInteger, function($value) {
            return $value % 2 != 0;
        });
        $odd = array_values($odd);
        
        return [
            'listOfInteger' => $listOfInteger,
            'min' => $min,
            'max' => $max,
            'odd' => $odd
        ];
    }
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Calculation Assignment</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">

        <div class="container mx-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="max-w-sm mx-auto bg-white rounded-lg shadow-lg overflow-hidden w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">Connie Kwan, SparkAI</h2>
                        <p class="text-gray-600 mt-2">List of Numbers <?=json_encode($calculate['listOfInteger'])?></p>
                        <p class="text-gray-600 mt-2">Minimum Number <?=$calculate['min']?></p>
                        <p class="text-gray-600 mt-2">Maximum Number <?=$calculate['max']?></p>
                        <p class="text-gray-600 mt-2">Odd Number <?=json_encode($calculate['odd'])?></p>
                    </div>
                </div>
            </div>
        </div>
    
    </body>
    
</html>
