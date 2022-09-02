<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup | Hotel Reservation</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="./app.js"></script>

    <link rel="stylesheet" href="style.css">


</head>

<body>

    <?php
include "./components/Nav.php";

?>

    <div class="w-screen h-full flex mt-36 justify-center">
        <form method="">
            <span class="text-4xl font-bold mb-10">Block Reservation</span>
            <div class="h-auto w-[70rem] flex ">
                <!--left-->
                <div class="w-1/3 mt-12 h-auto ">
                <div class="grid grid-cols-2 gap-2">
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Travel Agent</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>

                                </div>
                                <div class="mr-4 group">

                                </div>
                                <div class="mr-4 group col-span-2">
                                    <label for="" class="text-sm">Card Number</label>
                                    <div
                                        class="flex border border-gray-300 group-focus-within:border-gray-900 pr-1 pl-2">
                                        <input type="text" oninput="handleCreditCard();"
                                            class="h-8 w-full  outline-0 group-focus-within:border-gray-900" required>
                                        <span class="text-xs  m-2 mr-0 px-1 bg-slate-400 text-white">Visa</span>
                                    </div>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Expiration</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">CVV</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>

                                <hr class="w-full col-span-2 my-5">

                                <div class="mr-4">
                                    <label for="" class="text-sm">Room Type</label>
                                    <select name="" id=""
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900">
                                        <option value="">Luxury</option>
                                        <option value="">Deluxe</option>
                                    </select>
                                </div>

                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Guest Count</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Checking Date</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>
                                <div class="mr-4 group">
                                    <label for="" class="text-sm">Checkout Date</label>
                                    <input type="text"
                                        class="h-8 w-full border border-gray-300 outline-0 pl-2 focus:border-gray-900"
                                        required>
                                </div>

                                <div class="mr-4 col-span-2">

                                    <button
                                        class="w-24 bg-cyan-500 py-2 px-3 my-3 text-white font-bold mr-32">ADD</button>
                                </div>
                            </div>
                </div>


                <!--right-->
                <div class="w-2/3 mt-12 h-auto border-0 border-l-[1px] border-l-gray-500">
                <table class="w-full max-w-[63vw] text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                        <tr>
                            <th scope="col" class="py-3 px-3">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Type Name
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Guests
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                night
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                day
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                weekly
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                monthly
                            </th>
                            <th scope="col" class="py-3 px-3 bg-green-100">
                                disc
                            </th>
                        </tr>
                    </thead>
                    <tbody id="parent">
                        <!-- rows will programatically append here -->
                        
                    </tbody>

                </table>
                </div>

            </div>

            <!--table -->
            <div class="mt-10 h-96 w-[50rem] flex overflow-auto overflow-x-hidden">
                <table class="w-full max-w-[63vw] text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 sticky top-0">
                        <tr>
                            <th scope="col" class="py-3 px-3">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Type Name
                            </th>
                            <th scope="col" class="py-3 px-3">
                                Guests
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                night
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                day
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                weekly
                            </th>
                            <th scope="col" class="py-3 px-3 bg-pink-100">
                                monthly
                            </th>
                            <th scope="col" class="py-3 px-3 bg-green-100">
                                disc
                            </th>
                        </tr>
                    </thead>
                    <tbody id="parent">
                        <!-- rows will programatically append here -->
                        
                    </tbody>

                </table>
            </div>

        </form>
    </div>

</body>

</html>

