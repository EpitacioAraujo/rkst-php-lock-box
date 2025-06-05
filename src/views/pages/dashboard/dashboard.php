<?php

use Epitas\App\views\components\input\InputDTO;
?>

<style>
    * {
        box-sizing: border-box;
    }
    
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    
    .grid-content {
        width: 100vw;
        height: 100vh;
        display: grid;

        grid-template-areas:
            "header header"
            "nav nav"
            "aside main";

        grid-template-rows: min-content min-content 1fr;
        grid-template-columns: min-content 1fr;
    }

    .header {
        grid-area: header;
    }

    .nav {
        grid-area: nav;
    }

    .aside {
        grid-area: aside;
    }

    .main {
        grid-area: main;
        overflow-y: auto; /* Add scroll to main content if needed */
    }
</style>

<div class="grid-content">
    <header class="header p-3 flex">
        <div class="flex-1">
            <a class="text-3xl">Lock box</a>
        </div>

        <div class="flex gap-2">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full border-1 border-slate-500">
                        <img
                            alt="Tailwind CSS Navbar component"
                            src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="/signout">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>

    <nav class="nav p-3 flex gap-3">
        <label for="aside-menu" class="btn btn-primary drawer-button lg:hidden">
            Menu
        </label>

        <div class="flex-[1]">
            <?php
            $input = new InputDTO()
                ->id("search_notes")
                ->name("search_notes")
                ->placeholder("Buscar...");

            echo render('components/input/input', ["dto" => $input]);
            ?>
        </div>

        <button class="btn btn-primary">+ item</button>
    </nav>

    <aside class="aside">
        <div class="drawer lg:drawer-open h-full">
            <input id="aside-menu" type="checkbox" class="drawer-toggle" />

            <div class="drawer-side h-full">
                <label for="aside-menu" aria-label="close sidebar" class="drawer-overlay"></label>
                
                <ul class="menu bg-base-300 text-base-content h-full w-80 p-4">
                    <li><a>Sidebar Item 1</a></li>
                    <li><a>Sidebar Item 2</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <main class="main p-3 bg-base-200">
        <?= render("pages/dashboard/sections/note") ?>
    </main>
</div>