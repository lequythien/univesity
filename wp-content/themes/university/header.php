<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
                <?php
                $sitename = get_bloginfo('title'); // Lấy tên của trang web
                $parts = explode(' ', $sitename); // Tách tên thành các phần dựa trên dấu cách
                if (count($parts) >= 2) {
                    $first_part = $parts[0];
                    echo '<strong><a href="' . get_bloginfo('home') . '">' . $first_part . '</strong></a>';
                    $remaining_parts = array_slice($parts, 1);
                    if (!empty($remaining_parts)) {
                        echo ' <span style="color: white;">' . implode(' ', $remaining_parts) . '</span>';
                    }
                } else {
                    echo '<strong><a href="' . get_bloginfo('home') . '">' . $sitename . '</strong></a>';
                }
                ?>
                </a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
<<<<<<< HEAD
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary_menu',
                    'container'            => 'nav',
                    'container_class'      => 'main-navigation',

                ));
                ?>
=======
                <nav class="main-navigation">
                    <ul>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'container'            => 'nav',
                            'container_class'      => 'main-navigation',

                        ));
                        ?>
                    </ul>
                </nav>
>>>>>>> 7e57a7c (first commit)
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>