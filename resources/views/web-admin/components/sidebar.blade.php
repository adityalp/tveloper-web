<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">

        @include('web-admin.components.sidebar-mobile')

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="#" class="nav-link d-flex align-items-center">
                    <span class="mt-1 ms-4 sidebar-text">Tveloper Admin</span>
                </a>
            </li>

            <li role="separator" class="dropdown-divider mt-2 mb-3 border-gray-700"></li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Company</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('team.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Team</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('service.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Service</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('socialmedia.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Socials Media</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('freelancer.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="#ffffff" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 318.532 318.532" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M249.162,215.761c11.99-12.737,21.071-27.829,26.759-44.161c22.091-0.334,39.962-18.396,39.962-40.564 c0-19.316-13.569-35.512-31.673-39.585C267.096,37.366,216.406,0,159.266,0C102.15,0,51.441,37.373,34.327,91.449 c-18.106,4.07-31.678,20.269-31.678,39.586c0,16.513,9.92,30.743,24.109,37.072c3.952,13.824,14.644,24.828,28.286,29.203 c4.163,6.557,8.955,12.74,14.33,18.45c-31.303,22.406-53.519,56.082-61.519,93.713c-0.471,2.213,0.083,4.521,1.507,6.279 c1.424,1.758,3.566,2.78,5.829,2.78h288.157c2.263,0,4.405-1.021,5.829-2.78c1.424-1.759,1.978-4.066,1.507-6.279 C302.681,271.841,280.464,238.166,249.162,215.761z M280.235,105.936c11.752,2.307,20.647,12.682,20.647,25.1 c0,12.429-8.913,22.811-20.682,25.104c1.709-8.201,2.6-16.609,2.6-25.104C282.801,122.438,281.915,114.043,280.235,105.936z M35.732,131.035c0,1.485,0.036,2.967,0.089,4.446c-0.979-0.468-2.07-0.737-3.227-0.737c-4.142,0-7.5,3.357-7.5,7.5v6.813 c-4.6-4.627-7.447-10.998-7.447-18.021c0-12.419,8.896-22.795,20.649-25.1C36.618,114.043,35.732,122.438,35.732,131.035z M24.778,303.534v-0.001c9.414-33.01,31.049-61.927,60.391-80.311c1.988-1.245,3.279-3.35,3.488-5.687 c0.209-2.336-0.687-4.637-2.422-6.216c-4.081-3.714-7.841-7.717-11.272-11.957h15.464c2.294,3.212,6.043,5.313,10.291,5.313 c6.985,0,12.649-5.662,12.649-12.648c0-6.984-5.664-12.646-12.649-12.646c-4.1,0-7.733,1.959-10.044,4.982H68.169 c-1.195,0-2.37-0.084-3.525-0.229c-9.013-16.075-13.912-34.354-13.912-53.099C50.732,71.188,99.42,22.5,159.266,22.5 c59.847,0,108.535,48.688,108.535,108.535c0,30.487-12.94,59.751-35.501,80.285c-1.735,1.579-2.631,3.88-2.422,6.216 c0.209,2.337,1.5,4.441,3.488,5.687c29.342,18.383,50.977,47.3,60.393,80.311H24.778z">
                                            </path>
                                            <circle cx="85.605" cy="106.92" r="13.644"></circle>
                                            <path
                                                d="M223.391,123.535H95.143c-4.142,0-7.5,3.357-7.5,7.5c0,39.493,32.13,71.623,71.623,71.623 c39.494,0,71.625-32.13,71.625-71.623C230.891,126.893,227.533,123.535,223.391,123.535z M159.266,187.658 c-28.68,0-52.448-21.433-56.128-49.123h112.258C211.715,166.226,187.947,187.658,159.266,187.658z">
                                            </path>
                                            <circle cx="232.93" cy="106.921" r="13.645"></circle>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> </span>
                    <span class="sidebar-text">Freelancer</span>
                </a>
            </li>

            <li class="nav-item">
                <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                    data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Portfolio</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                <div class="multi-level collapse" role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <span class="sidebar-text">Category</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('portfolio.index') }}">
                                <span class="sidebar-text">Portfolio Data</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="#ffffff" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 337.559 337.559" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M337.559,67.704v-28.33c0-17.506-14.242-31.748-31.748-31.748h-54.572c-4.932-3.021-10.727-4.765-16.922-4.765H32.5 C14.58,2.86,0,17.44,0,35.36v266.838c0,17.921,14.58,32.5,32.5,32.5h201.816c6.196,0,11.992-1.745,16.925-4.767h54.569 c17.506,0,31.748-14.242,31.748-31.748v-28.33c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248 v-28.331c0-9.715-4.391-18.42-11.287-24.248c6.896-5.828,11.287-14.533,11.287-24.248V116.2c0-9.715-4.391-18.42-11.287-24.248 C333.168,86.123,337.559,77.418,337.559,67.704z M251.816,302.198c0,9.649-7.851,17.5-17.5,17.5H32.5 c-9.649,0-17.5-7.851-17.5-17.5V35.36c0-9.649,7.851-17.5,17.5-17.5h201.816c9.649,0,17.5,7.851,17.5,17.5V302.198z M322.559,298.184c0,9.235-7.513,16.748-16.748,16.748h-41.595c1.673-3.912,2.601-8.216,2.601-12.733v-49.093h38.994 c9.235,0,16.748,7.513,16.748,16.748V298.184z M322.559,221.357c0,9.235-7.513,16.748-16.748,16.748h-38.994v-61.827h38.994 c9.235,0,16.748,7.513,16.748,16.748V221.357z M322.559,144.53c0,9.235-7.513,16.748-16.748,16.748h-38.994V99.451h38.994 c9.235,0,16.748,7.513,16.748,16.748V144.53z M322.559,67.704c0,9.235-7.513,16.748-16.748,16.748h-38.994V35.36 c0-4.518-0.929-8.822-2.602-12.735h41.596c9.235,0,16.748,7.513,16.748,16.748V67.704z">
                                            </path>
                                            <rect x="40.413" y="230.024" width="185.991" height="15"></rect>
                                            <path
                                                d="M66.891,206.201h133.035c2.263,0,4.405-1.021,5.829-2.78c1.424-1.759,1.978-4.066,1.507-6.279 c-3.595-16.907-13.071-32.176-26.474-43.02c8.782-10.818,13.689-24.438,13.689-38.522c0-33.674-27.396-61.07-61.07-61.07 s-61.07,27.396-61.07,61.07c0,14.084,4.908,27.704,13.689,38.522c-13.402,10.844-22.878,26.112-26.472,43.02 c-0.471,2.213,0.083,4.521,1.507,6.279C62.486,205.18,64.628,206.201,66.891,206.201z M101.343,161.584 c1.988-1.245,3.279-3.35,3.488-5.687c0.209-2.337-0.687-4.637-2.422-6.216c-9.579-8.718-15.072-21.14-15.072-34.081 c0-25.403,20.667-46.07,46.07-46.07c25.403,0,46.07,20.667,46.07,46.07c0,12.941-5.494,25.363-15.072,34.081 c-1.735,1.579-2.631,3.879-2.422,6.216c0.209,2.337,1.5,4.441,3.488,5.687c11.154,6.989,19.735,17.49,24.42,29.618H76.923 C81.608,179.074,90.189,168.571,101.343,161.584z">
                                            </path>
                                            <rect x="63.83" y="259.688" width="139.156" height="15"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="sidebar-text">Contacts</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
