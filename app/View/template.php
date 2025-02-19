<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/dist.css">
    <link rel="stylesheet" href="../styles/account.css">
    <link rel="stylesheet" href="../styles/posts.css">
    <link rel="stylesheet" href="../styles/menu.css">
    <title><?= $title; ?></title> 
</head>
<body>
    <header>
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="/" class="text-2xl font-medium text-gray-600">
                        Polonium
                    </a>
                </div>
                
                <div class="-mr-2 -my-2 md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                    
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                
                <nav class="hidden md:flex space-x-10">
                    <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Homepage
                    </a>
                    <?php if( isset($_COOKIE['userRole']) && ( $_COOKIE['userRole'] == 1 || $_COOKIE['userRole'] == 2 ) ) : ?>
                        <a href="/write-article" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Write article
                        </a>
                    <?php endif; ?>

                    <?php if( isset($_COOKIE['id']) ) : ?>
                        <a href="/user/account" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Compte de <?php echo $_COOKIE['userFirstName']; ?>
                        </a>
                    <?php endif; ?>

                    <?php if( isset($_COOKIE['userRole']) && $_COOKIE['userRole'] == 1 ) : ?>
                        <a href="/user/show-all" class="text-base font-medium text-gray-500 hover:text-gray-900">
                           See Users
                        </a>
                    <?php endif; ?>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">

                    <?php if( ! isset($_COOKIE['id']) ) : ?>
                        <a href="/user/signin" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            Sign in
                        </a>
                        <a href="/user/signup" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-amber-600 hover:bg-amber-700">
                            Sign up
                        </a>
                    <?php else : ?>
                        <a href="/user/logout" class="logout"><img src="https://img.icons8.com/ios/50/000000/exit.png"/></a>
                    <?php endif; ?>
                </div>
                </div>
            </div>

            <!--
                Mobile menu, show/hide based on mobile menu state.
            -->
            <div class="absolute z-40 top-0 inset-x-0 transition transform origin-top-right md:hidden mobile__menu">
                <div class="ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 mx-auto px-4 sm:px-6">
                    <div class="flex items-center justify-between">
                    <div>
                        <a href="/" class="text-2xl font-medium text-gray-600">Polonium</a>
                    </div>
                    <div class="-mr-2  hamburger flex justify-center items-center">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </button>
                    </div>
                    </div>
                    <div class="mt-6">
                        <nav class="grid gap-y-8">
                        <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Homepage
                        </a>
                        <?php if( isset($_COOKIE['userRole']) && ( $_COOKIE['userRole'] == 1 || $_COOKIE['userRole'] == 2 ) ) : ?>
                            <a href="/write-article" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Write article
                            </a>
                        <?php endif; ?>

                        <?php if( isset($_COOKIE['id']) ) : ?>
                            <a href="/user/account" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                Compte de <?php echo $_COOKIE['userFirstName']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if( isset($_COOKIE['userRole']) && $_COOKIE['userRole'] == 1 ) : ?>
                            <a href="/user/show-all" class="text-base font-medium text-gray-500 hover:text-gray-900">
                                See Users
                            </a>
                        <?php endif; ?>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
                    <div>
                        <a href="/user/signup" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-amber-600 hover:bg-amber-700">
                            Sign up
                        </a>
                        <p class="mt-6 text-center text-base font-medium text-gray-500">
                            Existing writer ?
                            <a href="/user/signin" class="text-amber-600 hover:text-amber-500">
                                Sign in
                            </a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>

    <main class="flex flex-col items-center justify-center max-w-7xl mx-auto my-8 px-4 sm:px-6" role="main" id="mainContent">
        <?= $content; ?>
    </main>

    <footer>
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <nav class="flex justify-center items-center space-x-10  py-8 border-t-2 border-gray-100">
                    <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900">
                    Homepage
                    </a>
                    <?php if( isset($_COOKIE['userRole']) && ( $_COOKIE['userRole'] == 1 || $_COOKIE['userRole'] == 2 ) ) : ?>
                        <a href="/write-article" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Write article
                        </a>
                    <?php endif; ?>

                    <?php if( isset($_COOKIE['id']) ) : ?>
                        <a href="/user/account" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Compte de <?php echo $_COOKIE['userFirstName']; ?>
                        </a>
                    <?php endif; ?>

                    <?php if( isset($_COOKIE['userRole']) && $_COOKIE['userRole'] == 1 ) : ?>
                        <a href="/user/show-all" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        See Users
                        </a>
                    <?php endif; ?>
                </nav>
                
                <!-- TODO: Social media list -->
                <ul class="hidden" role="list"></ul>
                <p class="text-base text-gray-400 text-center">© Polonium is an Open source project</p>
            </div>
        </div>
    </footer>
    <script src="../scripts/app.js" defer="defer"></script>
</body>
</html>