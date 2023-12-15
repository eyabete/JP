<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JourniPlan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f3f4f6;
            /* Set the background color */
            overflow: auto;
        }

        #app {
            flex: 1;
        }

        footer {
            text-align: center;
            padding: 1rem;
            color: white;
            margin-top: -65px;
            background-color: transparent;
        }

        .container {
            text-align: center;
        }

        .rounded-image-container {
            width: 150px;
            /* Set your desired width */
            height: 150px;
            /* Set your desired height */
            margin: 0 10px;
            /* Set spacing between images if needed */
            border-radius: 50%;
            overflow: hidden;
            display: inline-block;
            /* Allow multiple images to be displayed inline */
            vertical-align: top;
            /* Align images at the top of the container */
        }

        .rounded-image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 50%;
        }

        .developer {
            text-align: center;
            margin: 10px;
            display: inline-block;
        }

        .name,
        .position {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div id="app">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Welcome to JourniPlan!') }}
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-auto shadow-xl sm:rounded-lg p-6" style="background-color:#fef9c3;">
                        <h1 class="text-5xl font-bold mb-4 text-indigo-800 dark:text-indigo-300">What is JourniPlan?</h1>
                        <hr class="border-t-2 border-indigo-600 mb-6">

                        <p class="text-lg text-gray-700 dark:text-gray-300 text-justify">
                            JourniPlan is a secure web application project that provides a comprehensive
                            solution for personal growth and organization. It seamlessly combines the art of
                            journaling with productivity features, enabling users to input their thoughts,
                            emotions, and experiences. Beyond journaling, JourniPlan boasts a robust to-do list
                            functionality, enabling users to organize their tasks and stay on top of their goals.

                            <br><br>

                            With a clean and intuitive interface, JourniPlan makes it easy for you to capture
                            your daily reflections and plan your tasks efficiently. The application is designed
                            to enhance your personal development journey, offering a seamless blend of journaling
                            and task management.

                            <br><br>

                            Use JourniPlan today and embark on a path of self-discovery and productivity!
                        </p>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-auto shadow-xl sm:rounded-lg p-6 mt-5" style="background-color:#fef9c3;">
                        <h1 class="text-5xl font-bold mb-4 text-indigo-800 dark:text-indigo-300">The Developers</h1>
                        <hr class="border-t-2 border-indigo-600 mb-6">

                        <div class="container">
                            <!-- Repeat the above code for additional images and names -->
                            <div class="developer">
                                <div class="rounded-image-container">
                                    <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-6/384524030_6751728268251389_1879972032671115293_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeEil6r-tLbb7SRgoxYXRU2iXc4CchS4vrNdzgJyFLi-s5GOyCFPUJu5VVLSCMDz-bOMMNB4mYaXa8m2NdJyxE--&_nc_ohc=tDptOjPTbfIAX9dLb_o&_nc_ht=scontent.fdvo2-2.fna&oh=00_AfDU1L23HQOYuY8NamxUDGPk4wuZw8H4nsN4_sXUqtw3Zg&oe=65804DE2" alt="pic2">
                                </div>
                                <p class="name">Megan T. Binondo</p>
                                <p class="position">Quality Assurance Tester</p>
                            </div>

                            <div class="developer">
                                <div class="rounded-image-container">
                                    <img src="https://scontent.fdvo2-1.fna.fbcdn.net/v/t39.30808-6/362897641_3493938487531450_2821449375607098658_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeFgetf7ybo-4fK2urz7lg_Ay0_4S7PuJ4_LT_hLs-4njz1BGX1MrYYJZMWPCDGwaSk2XcgMM4YW8F6ziwZz5gpd&_nc_ohc=abKU-PbiO3cAX9NE24q&_nc_ht=scontent.fdvo2-1.fna&oh=00_AfA1jKK7sRCa9lNVSnsc0IMr5y3uFiketfzNXluz5TMrig&oe=65802842" alt="pic">
                                </div>
                                <p class="name">Francis Andrew G. Laulita</p>
                                <p class="position">Front- End Developer</p>
                            </div>

                            <div class="developer">
                                <div class="rounded-image-container">
                                    <img src="aljon.jpg" alt="pic3">
                                </div>
                                <p class="name">Aljon Fernando</p>
                                <p class="position">Database Administrator</p>
                            </div>

                            <div class="developer">
                                <div class="rounded-image-container">
                                    <img src="https://scontent.fdvo2-1.fna.fbcdn.net/v/t39.30808-6/373534942_1703659690112702_6673350923222976238_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=9c7eae&_nc_eui2=AeGEagtaDIgdYE4Qfr-sThLep2NT9DYPGOKnY1P0Ng8Y4hid87pOmL2kaV9ih8jPCZgTsBtQdkLHM3DZvg-dluSF&_nc_ohc=mcf6sDnBbAwAX-ZqnJD&_nc_ht=scontent.fdvo2-1.fna&oh=00_AfAwKWNgTEIR-yVj6pqaR3tSZGgIQsTIfEyNr7uyzkxDHQ&oe=65809C17" alt="pic4">
                                </div>
                                <p class="name">Jay Homer B. Jaron</p>
                                <p class="position">Backend Developer</p>
                            </div>

                            <div class="developer">
                                <div class="rounded-image-container">
                                    <img src="https://scontent.fdvo2-1.fna.fbcdn.net/v/t39.30808-6/336709088_772893587761624_2194355559844852825_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=9c7eae&_nc_eui2=AeGvWp-5NMPxdktTL6SFAUMYYnphzLnenWpiemHMud6dau1xeWCLAFktLVvg86qNnYnT9eATshWx_Ze4TWjVEuNX&_nc_ohc=GvJ-vN4-t4IAX93oq26&_nc_ht=scontent.fdvo2-1.fna&oh=00_AfDhnr38anlhVEh1RQGFc17rq0517vtKFAGPg9pbtIfG3Q&oe=657F9B15" alt="pic5">
                                </div>
                                <p class="name">Rhea M. Bete</p>
                                <p class="position">UI/UX Designer</p>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
    </div>

    </x-app-layout>
    </div>

    <footer>
        <p>&copy; 2023 JourniPlan. All rights reserved.</p>
    </footer>
</body>

</html>