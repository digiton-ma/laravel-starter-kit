<!-- ====== Navbar Section Start -->
<div class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
    <div class="container">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="/" class="block w-full py-5 navbar-logo">
                    <img src="assets/images/logo/logo-white.png" alt="logo" class="w-full header-logo"/>
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <div>
                    <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                    </button>
                    <nav id="navbarCollapse"
                         class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none xl:px-6">
                        <ul class="blcok lg:flex 2xl:ml-20">
                            <li class="relative group">
                                <a href="#home"
                                   class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                                    Home
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#about"
                                   class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    About
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="#contact"
                                   class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    Contact
                                </a>
                            </li>
                            <li class="relative group">
                                <a href="blog-grids.html"
                                   class="flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    Blog
                                </a>
                            </li>
                            <li class="relative submenu-item group">
                                <a href="javascript:void(0)"
                                   class="relative flex items-center justify-between py-2 mx-8 text-base font-medium text-dark group-hover:text-primary lg:ml-8 lg:mr-0 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                                    Pages

                                    <svg class="ml-2 fill-current" width="16" height="20" viewBox="0 0 16 20"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.99999 14.9C7.84999 14.9 7.72499 14.85 7.59999 14.75L1.84999 9.10005C1.62499 8.87505 1.62499 8.52505 1.84999 8.30005C2.07499 8.07505 2.42499 8.07505 2.64999 8.30005L7.99999 13.525L13.35 8.25005C13.575 8.02505 13.925 8.02505 14.15 8.25005C14.375 8.47505 14.375 8.82505 14.15 9.05005L8.39999 14.7C8.27499 14.825 8.14999 14.9 7.99999 14.9Z"/>
                                    </svg>
                                </a>
                                <div
                                    class="submenu relative left-0 top-full hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full">
                                    <a href="about.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        About Page
                                    </a>
                                    <a href="contact.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        Contact Page
                                    </a>
                                    <a href="blog-grids.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        Blog Grid Page
                                    </a>
                                    <a href="blog-details.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        Blog Details Page
                                    </a>
                                    <a href="signup.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        Sign Up Page
                                    </a>
                                    <a href="signin.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        Sign In Page
                                    </a>
                                    <a href="404.html"
                                       class="block rounded px-4 py-[10px] text-sm text-body-color hover:text-primary">
                                        404 Page
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center justify-end pr-16 lg:pr-0">
                    <div class="hidden sm:flex">
                        @guest
                            <a href="/login"
                               class="loginBtn px-[22px] py-2 text-base font-medium text-white hover:opacity-70">
                                Sign In
                            </a>
                            <a href="/register"
                               class="px-6 py-2 text-base font-medium text-white duration-300 ease-in-out bg-white rounded-md signUpBtn bg-opacity-20 hover:bg-opacity-100 hover:text-dark">
                                Sign Up
                            </a>
                        @endguest

                        @auth
                            <a href="/dashboard"
                               class="px-6 py-2 text-base font-medium text-white duration-300 ease-in-out bg-white rounded-md signUpBtn bg-opacity-20 hover:bg-opacity-100 hover:text-dark">
                                Dashboard
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Navbar Section End -->
