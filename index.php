<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySocial - Responsive Social Media Website Using HTML, CSS, & JavaScript</title>
    <!-- IconScout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');


    :root {
        --primary-color-hue: 252;
        --dark-color-lightness: 17%;
        --light-color-lightness: 95%;
        --white-color-lightness: 100%;

        --color-white: hsl(252, 30%, var(--white-color-lightness));
        --color-light: hsl(252, 30%, var(--light-color-lightness));
        --color-grey: hsl(252, 15%, 65%);
        --color-primary: hsl(var(--primary-color-hue), 75%, 60%);
        --color-secondary: hsl(252, 100%, 90%);
        --color-success: hsl(120, 95%, 65%);
        --color-danger: hsl(0, 95%, 65%);
        --color-dark: hsl(252, 30%, var(--dark-color-lightness));
        --color-black: hsl(252, 30%, 10%);

        --border-radius: 2rem;
        --card-border-radius: 1rem;
        --btn-padding: 0.6rem 2rem;
        --search-padding: 0.6rem 1rem;
        --card-padding: 1rem;

        --sticky-top-left: 5.4rem;
        --sticky-top-right: -18rem;

    }

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        outline: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        border: none;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: var(--color-dark);
        background: var(--color-light);
        overflow-x: hidden;
    }

    /* =============== General Style ============== */
    .container {
        width: 80%;
        margin: 0 auto;
    }

    .profile-photo {
        width: 2.7rem;
        aspect-ratio: 1/1;
        border-radius: 50%;
        overflow: hidden;
    }

    img {
        display: block;
        width: 100%;
    }

    .btn {
        display: inline-block;
        padding: var(--btn-padding);
        font-weight: 500;
        border-radius: var(--border-radius);
        cursor: pointer;
        transition: all 300ms ease;
        font-size: 0.9rem;
    }

    .btn:hover {
        opacity: 0.8;
    }

    .btn-primary {
        background: var(--color-primary);
        color: var(--color-white);
    }

    .text-bold {
        font-weight: 500;
    }

    .text-muted {
        color: var(--color-grey);
    }

    /* =============== Navbar ============== */
    nav {
        width: 100%;
        background: var(--color-white);
        padding: 0.7rem 0;
        position: fixed;
        top: 0;
        z-index: 10;
    }

    nav .container {
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .search-bar {
        background: var(--color-light);
        border-radius: var(--border-radius);
        padding: var(--search-padding);
    }

    .search-bar input[type="search"] {
        background: transparent;
        width: 30vw;
        margin-left: 1rem;
        font-size: 0.9rem;
        color: var(--color-dark);
    }

    nav .search-bar input[type="search"]::placeholder {
        color: var(--color-grey);
    }

    nav .create {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    /* =============== Main ============== */
    main {
        position: relative;
        top: 5.4rem;
    }

    main .container {
        display: grid;
        grid-template-columns: 18vw auto 20vw;
        column-gap: 2rem;
        position: relative;
    }

    /* =============== Left ============== */
    main .container .left {
        height: max-content;
        position: sticky;
        top: var(--sticky-top-left);
    }

    main .container .left .profile {
        padding: var(--card-padding);
        background: var(--color-white);
        border-radius: var(--card-border-radius);
        display: flex;
        align-items: center;
        column-gap: 1rem;
        width: 100%;
    }

    /* =============== Sidebar ============== */
    .left .sidebar {
        margin-top: 1rem;
        background: var(--color-white);
        border-radius: var(--card-border-radius);
    }

    .left .sidebar .menu-item {
        display: flex;
        align-items: center;
        height: 4rem;
        cursor: pointer;
        transition: all 300ms ease;
        position: relative;
    }

    .left .sidebar .menu-item:hover {
        background: var(--color-light);
    }

    .left .sidebar i {
        font-size: 1.4rem;
        color: var(--color-grey);
        margin-left: 2rem;
        position: relative;
    }

    .left .sidebar i .notification-count {
        background: var(--color-danger);
        color: white;
        font-size: 0.7rem;
        width: fit-content;
        border-radius: 0.8rem;
        padding: 0.1rem 0.4rem;
        position: absolute;
        top: -0.2rem;
        right: -0.3rem;
    }

    .left .sidebar h3 {
        margin-left: 1.5rem;
        font-size: 1rem;
    }

    .left .sidebar .active {
        background: var(--color-light);
    }

    .left .sidebar .active i,
    .left .sidebar .active h3 {
        color: var(--color-primary);
    }

    .left .sidebar .active::before {
        content: "";
        display: block;
        width: 0.5rem;
        height: 100%;
        position: absolute;
        background: var(--color-primary);
    }

    .left .sidebar .menu-item:first-child.active {
        border-top-left-radius: var(--card-border-radius);
        overflow: hidden;
    }

    .left .sidebar .menu-item:last-child.active {
        border-bottom-left-radius: var(--card-border-radius);
        overflow: hidden;
    }

    .left .btn {
        margin-top: 1rem;
        width: 100%;
        text-align: center;
        padding: 1rem 0;
        margin-bottom: 0.7rem;
    }

    /* =============== Notification Popup ============== */
    .left .notifications-popup {
        position: absolute;
        top: 0;
        left: 110%;
        width: 30rem;
        background: var(--color-white);
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
        box-shadow: 0 0 2rem hsl(var(--color-primary), 75%, 60%, 25%);
        z-index: 8;
        display: none;
    }

    .left .notifications-popup::before {
        content: "";
        width: 1.2rem;
        height: 1.2rem;
        display: block;
        background: var(--color-white);
        position: absolute;
        left: -0.6rem;
        transform: rotate(45deg);
    }

    .left .notifications-popup>div {
        display: flex;
        align-items: start;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .left .notifications-popup small {
        display: block;
    }

    /* =============== Middle ============== */
    /* =============== Stories ============== */
    .middle .stories {
        display: flex;
        justify-content: space-between;
        height: 12rem;
        gap: 0.5rem;
    }

    .middle .stories .story {
        padding: var(--card-padding);
        border-radius: var(--card-border-radius);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        color: white;
        font-size: 0.75rem;
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .middle .stories .story::before {
        content: "";
        display: block;
        width: 100%;
        height: 5rem;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.75));
        position: absolute;
        bottom: 0;
    }

    .middle .stories .story .name {
        z-index: 0;
    }

    .middle .stories .story:nth-child(1) {
        background: url("./images/p1.jpg") no-repeat center center/cover;
    }

    .middle .stories .story:nth-child(2) {
        background: url("./images/p2.jpg") no-repeat center center/cover;
    }

    .middle .stories .story:nth-child(3) {
        background: url("./images/p18.jpg") no-repeat center center/cover;
    }

    .middle .stories .story:nth-child(4) {
        background: url("./images/p4.jpg") no-repeat center center/cover;
    }

    .middle .stories .story:nth-child(5) {
        background: url("./images/p5.jpg") no-repeat center center/cover;
    }

    .middle .stories .story:nth-child(6) {
        background: url("./images/p6.jpg") no-repeat center center/cover;
    }

    .middle .story .profile-photo {
        width: 2rem;
        height: 2rem;
        align-self: start;
        border: 3px solid var(--color-light);
    }

    /* =============== Create Post ============== */
    .middle .create-post {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1rem;
        background: var(--color-white);
        padding: 0.4rem var(--card-padding);
        border-radius: var(--border-radius);
    }

    .middle .create-post input[type="text"] {
        width: 100%;
        justify-self: start;
        padding-left: 1rem;
        background: transparent;
        color: var(--color-dark);
        margin-right: 1rem;
    }

    /* =============== Feeds ============== */
    .middle .feeds .feed {
        background: var(--color-white);
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
        margin: 1rem 0;
        font-size: 0.85rem;
        line-height: 1.5;
    }

    .middle .feed .head {
        display: flex;
        justify-content: space-between;
    }

    .middle .feed .user {
        display: flex;
        gap: 1rem;
    }

    .middle .feed .photo {
        border-radius: var(--card-border-radius);
        overflow: hidden;
        margin: 0.7rem 0;
    }

    .middle .feed .action-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.4rem;
        margin: 0.6rem 0;
    }

    .middle .liked-by {
        display: flex;
    }

    .middle .liked-by span {
        width: 1.4rem;
        height: 1.4rem;
        display: block;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid var(--color-white);
        margin-left: -0.6rem;
    }

    .middle .liked-by span:first-child {
        margin: 0;
    }

    .middle .liked-by p {
        margin-left: 0.5rem;
    }

    /* =============== Right ============== */
    main .container .right {
        height: max-content;
        position: sticky;
        top: var(--sticky-top-right);
        bottom: 0;
    }

    /* =============== Messages ============== */
    .right .messages {
        background: var(--color-white);
        border-radius: var(--card-border-radius);
        padding: var(--card-padding);
    }

    .right .messages .heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .right .messages i {
        font-size: 1.4rem;
    }

    .right .messages .search-bar {
        display: flex;
        margin-bottom: 1rem;
    }

    .right .messages .category {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .right .messages .category h6 {
        width: 100%;
        text-align: center;
        border-bottom: 4px solid var(--color-light);
        padding-bottom: 0.5rem;
        font-size: 0.75rem;
    }

    .right .messages .category .active {
        border-color: var(--color-dark);
    }

    .right .messages .message-requests {
        color: var(--color-primary);
    }

    .right .messages .message {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
        align-items: start;
    }

    .right .message .profile-photo {
        position: relative;
        overflow: visible;
    }

    .right .profile-photo img {
        border-radius: 50%;
    }

    .right .messages .message:last-child {
        margin: 0;
    }

    .right .messages .message p {
        font-size: 0.8rem;
    }

    .right .messages .message .profile-photo .active {
        width: 0.8rem;
        height: 0.8rem;
        border-radius: 50%;
        border: 3px solid var(--color-white);
        background: var(--color-success);
        position: absolute;
        bottom: 0;
        right: 0;
    }

    /* =============== Friend Requests ============== */
    .right .friend-requests {
        margin-top: 1rem;
    }

    .right .friend-requests h4 {
        color: var(--color-grey);
        margin: 1rem 0;
    }

    .right .request {
        background: var(--color-white);
        padding: var(--card-padding);
        border-radius: var(--card-border-radius);
        margin-bottom: 0.7rem;
    }

    .right .request .info {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .right .request .action {
        display: flex;
        gap: 1rem;
    }

    /* =============== Theme Customization ============== */
    .customize-theme {
        background: rgba(0, 0, 0, 0.5);
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100%;
        text-align: center;
        display: grid;
        place-items: center;
        display: none;
    }

    .customize-theme .card {
        background: var(--color-white);
        padding: 3rem;
        border-radius: var(--card-border-radius);
        width: 50%;
        box-shadow: 0 0 1rem var(--color-primary);
    }

    /* =============== Font Size ============== */
    .customize-theme .font-size {
        margin-top: 5rem;
    }

    .customize-theme .font-size>div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--color-light);
        padding: var(--search-padding);
        border-radius: var(--card-border-radius);
    }

    .customize-theme .choose-size {
        background: var(--color-secondary);
        height: 0.3rem;
        width: 100%;
        margin: 0 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .customize-theme .choose-size span {
        width: 1rem;
        height: 1rem;
        background: var(--color-secondary);
        border-radius: 50%;
        cursor: pointer;
    }

    .customize-theme .choose-size span.active {
        background: var(--color-primary);
    }

    /* =============== Color ============== */
    .customize-theme .color {
        margin-top: 2rem;
    }

    .customize-theme .choose-color {
        background: var(--color-light);
        padding: var(--search-padding);
        border-radius: var(--card-border-radius);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .customize-theme .choose-color span {
        width: 2.2rem;
        height: 2.2rem;
        border-radius: 50%;
    }

    .customize-theme .choose-color span:nth-child(1) {
        background: hsl(233, 60%, 16%);
    }

    .customize-theme .choose-color span:nth-child(2) {
        background: hsl(52, 75%, 60%);
    }

    .customize-theme .choose-color span:nth-child(3) {
        background: hsl(352, 75%, 60%);
    }

    .customize-theme .choose-color span:nth-child(4) {
        background: hsl(152, 75%, 60%);
    }

    .customize-theme .choose-color span:nth-child(5) {
        background: hsl(202, 75%, 60%);
    }

    .customize-theme .choose-color span.active {
        border: 5px solid var(--color-secondary);
    }

    /* =============== Background ============== */
    .customize-theme .background {
        margin-top: 2rem;
    }

    .customize-theme .choose-bg {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
    }

    .customize-theme .choose-bg>div {
        padding: var(--card-padding);
        width: 100%;
        display: flex;
        align-items: center;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 0.4rem;
        cursor: pointer;
    }

    .customize-theme .choose-bg>div.active {
        border: 2px solid var(--color-primary);
    }

    .customize-theme .choose-bg .bg-1 {
        background: white;
        color: black;
    }

    .customize-theme .choose-bg .bg-2 {
        background: hsl(252, 30%, 17%);
        color: white;
    }

    .customize-theme .choose-bg .bg-3 {
        background: hsl(252, 30%, 10%);
        color: white;
    }

    .customize-theme .choose-bg>div span {
        width: 2rem;
        height: 2rem;
        border: 2px solid var(--color-grey);
        border-radius: 50%;
        margin-right: 1rem;
    }

    /* ================= 
MEDIA QUERIES FOR SMALL LAPTOP AND BIG TABLETS 
==================== */

    @media screen and (max-width: 1200px) {
        .container {
            width: 96%;
        }

        main .container {
            grid-template-columns: 5rem auto 30vw;
            gap: 1rem;
        }

        .left {
            width: 5rem;
            z-index: 5;
        }

        main .container .left .profile {
            display: none;
        }

        .sidebar h3 {
            display: none;
        }

        .left .btn {
            display: none;
        }

        .customize-theme .card {
            width: 80vw;
        }
    }

    /* ================= 
MEDIA QUERIES FOR SMALL TABLETS AND MOBILE PHONES
==================== */

    @media screen and (max-width: 992px) {
        nav .search-bar {
            display: none;
        }

        main .container {
            grid-template-columns: 0 auto 5rem;
            gap: 0;
        }

        main .container .left {
            grid-column: 3/4;
            position: fixed;
            bottom: 0;
            right: 0;
        }

        /* Notification Popup */
        .left .notifications-popup {
            position: absolute;
            left: -20rem;
            width: 20rem;
        }

        .left .notifications-popup::before {
            display: absolute;
            top: 1.3rem;
            left: calc(20rem - 0.6rem);
            display: block;
        }

        main .container .middle {
            grid-column: 1/3;
        }

        main .container .right {
            display: none;
        }

        .customize-theme .card {
            width: 80vw;
        }
    }
</style>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                NUESTROS RECUERDOS
            </h2>
            <div class="create">

                <div class="profile-photo">
                    <img src="images/p1.jpg" alt="">
                </div>
            </div>
        </div>
    </nav>

    <!-------------------------------- MAIN ----------------------------------->
    <main>
        <div class="container">
            <!----------------- LEFT -------------------->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="./images/p1.jpg">
                    </div>
                    <div class="handle">
                        <h4>NUESTROS RECUERDOS</h4>
                        <p class="text-muted">
                            @TILINES
                        </p>
                    </div>
                </a>

                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Mensajes</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Cambiame el color!</h3>
                    </a>
                </div>
                <!----------------- END OF SIDEBAR -------------------->

            </div>

            <!----------------- MIDDLE -------------------->
            <div class="middle">
                <!----------------- STORIES -------------------->
                <div class="stories">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">Nuestras historias</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">Primera foto</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">Me gustas!</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">En el gym!</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">Besos</p>
                    </div>
                    <div class="story">
                        <div class="profile-photo">
                            <img src="./images/p1.jpg">
                        </div>
                        <p class="name">De fiesta!</p>
                    </div>
                </div>
                <!----------------- END OF STORIES -------------------->
                <form action="php/deseo.php" method="post" class="create-post">
                    <div class="profile-photo">
                        <img src="./images/p1.jpg">
                    </div>
                    <input name="deseo" type="text" placeholder="Danos tus mejores deseos!" id="create-post">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>15 Minutes Ago: Eres la mujer de mis sueños mi mayor ahnelo!</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p8.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Eres la mujer de mis sueños mi mayor ahnelo!
                                <span class="harsh-tag"></span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 1 -------------------->

                    <!----------------- FEED 2 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>2 Hours Ago: Tan inteligente, hermosa y fuerte!!! </small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p9.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Diana Rose</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Tan inteligente, hermosa y fuerte!!!
                                <span class="harsh-tag"></span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 100 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 2 -------------------->

                    <!----------------- FEED 3 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>50 Minutes Ago: Me la pase muy bien ese dia, te veias muy hermosa con ese
                                        vestido!!</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p10.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Clara Dwayne</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Me la pase muy bien ese dia, te veias muy hermosa con ese vestido!!
                                <span class="harsh-tag"></span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 50 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 3 -------------------->

                    <!----------------- FEED 4 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>1 Hour Ago: Gracias mi amor, me gusto mucho sabia muy rico!!</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p12.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Lana Rose</b> and <b>5, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Gracias mi amor, me gusto mucho sabia muy rico!!
                                <span class="harsh-tag">#Tilines</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 540 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 4 -------------------->

                    <!----------------- FEED 5 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>3 Hours Ago: Cada momento contigo es perfecto!!!</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p13.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Riana Rose</b> and <b>1, 226 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Cada momento contigo es perfecto!!!
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 199 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 5 -------------------->

                    <!----------------- FEED 6 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>5 Hours Ago: Solo son tus besos, los que quiero por el resto de mi
                                        vida!</small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p14.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Ernest Achiever</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Solo son tus besos, los que quiero por el resto de mi vida!
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 6 -------------------->

                    <!----------------- FEED 7 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>8 Hours Ago: Gracias por todos aquellos momentos felices! </small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p15.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Benjamin Dwayne</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Gracias por todos aquellos momentos felices!
                                <span class="harsh-tag">#lifestyle</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 7 -------------------->

                    <!----------------- FEED 7 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>3 Hours Ago: Quiero ser tuyo por siempre! </small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p3.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Benjamin Dwayne</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> Quiero ser tuyo por siempre!!
                                <span class="harsh-tag">#Love</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 7 -------------------->

                    <!----------------- FEED 7 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpg">
                                </div>
                                <div class="info">
                                    <h3>Wallace</h3>
                                    <small>8 Hours Ago: TE AMO MUCHO MI AMOR! </small>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/p16.jpg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <span><img src="./images/11.png"></span>
                            <p>Liked by <b>Benjamin Dwayne</b> and <b>2, 323 others</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Wallace</b> TE AMO MUCHO MI AMOR!
                                <span class="harsh-tag">#Tilines</span>
                            </p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 7 -------------------->
                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
            <!----------------- END OF MIDDLE -------------------->

            <!----------------- RIGHT -------------------->
            <div class="right">
                <!------- MESSAGES ------->
                <div class="messages">
                    <div class="heading">
                        <h4>Lista de deseos</h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Buscar deseo" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                        <h6 class="active">Principales</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">no mostrados (7)</h6>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/12-a.png">
                        </div>
                        <div class="message-body">
                            <h5>Mari</h5>
                            <p class="text-muted">Solemos pasar  buscando a la persona  , pero esa persona no se busca, son las cosas del destino quienes las ponen en nuestro camino, estoy feliz de que se hayan encontrado y de que con el paso de  de su  se hayan vuelto fuertes, libres, valientes, y muchos adjetivos más, porque estar con alguien implica estar completo para formar parte de algo más grande:¡Feliz ! sigan siendo ustedes y haciéndolo funcionar ✨</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/12-a.png">
                        </div>
                        <div class="message-body">
                            <h5>Montse</h5>
                            <p class="text-muted">✨Les deseo lo más bonito para su relación que cada momento juntos los una más y se enamoren cada vez más de uno del otro, que cada momento que estén juntos sea único y hermoso 😊</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/12-a.png">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Valentina</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/12-a.png">
                        </div>
                        <div class="message-body">
                            <h5>Manuel</h5>
                            <p class="text-muted">Birtday Tomorrow</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <?php
                    include("php/conexion.php"); // Incluye el archivo de conexión a la base de datos
                    
                    // Realiza una consulta para seleccionar los comentarios de la tabla 'deseos'
                    $result = mysqli_query($conexion, "SELECT comment, DATE(date) as formatted_date FROM deseos");

                    // Itera a través de los resultados y muestra los comentarios
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="message">';
                        echo '<div class="profile-photo">';
                        echo '<img src="./images/12-a.png">';
                        echo '</div>';
                        echo '<div class="message-body">';
                        echo '<h5>Usuraio x</h5>';
                        echo '<p class="text-muted">' . $row['comment'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }

                    // Cierra la conexión a la base de datos
                    mysqli_close($conexion);
                    ?>

                </div>
                <!------- END OF MESSAGES ------->


            </div>
    </main>

    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sidebar
        const menuItems = document.querySelectorAll('.menu-item');

        // Messages 
        const messageNotification = document.querySelector('#messages-notifications');
        const messages = document.querySelector('.messages');
        const message = messages.querySelectorAll('.message');
        const messageSearch = document.querySelector('#message-search');

        //Theme
        const theme = document.querySelector('#theme');
        const themeModal = document.querySelector('.customize-theme');
        const fontSize = document.querySelectorAll('.choose-size span');
        var root = document.querySelector(':root');
        const colorPalette = document.querySelectorAll('.choose-color span');
        const Bg1 = document.querySelector('.bg-1');
        const Bg2 = document.querySelector('.bg-2');
        const Bg3 = document.querySelector('.bg-3');


        // ============== SIDEBAR ============== 

        // Remove active class from all menu items
        const changeActiveItem = () => {
            menuItems.forEach(item => {
                item.classList.remove('active');
            })
        }

        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                changeActiveItem();
                item.classList.add('active');
                if (item.id != 'notifications') {
                    document.querySelector('.notifications-popup').
                        style.display = 'none';
                } else {
                    document.querySelector('.notifications-popup').
                        style.display = 'block';
                    document.querySelector('#notifications .notification-count').
                        style.display = 'none';
                }
            })
        })

        // ============== MESSAGES ============== 

        //Searches messages
        const searchMessage = () => {
            const val = messageSearch.value.toLowerCase();
            message.forEach(user => {
                let name = user.querySelector('h5').textContent.toLowerCase();
                if (name.indexOf(val) != -1) {
                    user.style.display = 'flex';
                } else {
                    user.style.display = 'none';
                }
            })
        }

        //Search for messages
        messageSearch.addEventListener('keyup', searchMessage);

        //Highlight messages card when messages menu item is clicked
        messageNotification.addEventListener('click', () => {
            messages.style.boxShadow = '0 0 1rem var(--color-primary)';
            messageNotification.querySelector('.notification-count').style.display = 'none';
            setTimeout(() => {
                messages.style.boxShadow = 'none';
            }, 2000);
        })

        // ============== THEME / DISPLAY CUSTOMIZATION ============== 

        // Opens Modal
        const openThemeModal = () => {
            themeModal.style.display = 'grid';
        }

        // Closes Modal
        const closeThemeModal = (e) => {
            if (e.target.classList.contains('customize-theme')) {
                themeModal.style.display = 'none';
            }
        }

        themeModal.addEventListener('click', closeThemeModal);
        theme.addEventListener('click', openThemeModal);


        // ============== FONT SIZE ============== 

        // remove active class from spans or font size selectors
        const removeSizeSelectors = () => {
            fontSize.forEach(size => {
                size.classList.remove('active');
            })
        }

        fontSize.forEach(size => {
            size.addEventListener('click', () => {
                removeSizeSelectors();
                let fontSize;
                size.classList.toggle('active');

                if (size.classList.contains('font-size-1')) {
                    fontSize = '10px';
                    root.style.setProperty('----sticky-top-left', '5.4rem');
                    root.style.setProperty('----sticky-top-right', '5.4rem');
                } else if (size.classList.contains('font-size-2')) {
                    fontSize = '13px';
                    root.style.setProperty('----sticky-top-left', '5.4rem');
                    root.style.setProperty('----sticky-top-right', '-7rem');
                } else if (size.classList.contains('font-size-3')) {
                    fontSize = '16px';
                    root.style.setProperty('----sticky-top-left', '-2rem');
                    root.style.setProperty('----sticky-top-right', '-17rem');
                } else if (size.classList.contains('font-size-4')) {
                    fontSize = '19px';
                    root.style.setProperty('----sticky-top-left', '-5rem');
                    root.style.setProperty('----sticky-top-right', '-25rem');
                } else if (size.classList.contains('font-size-5')) {
                    fontSize = '22px';
                    root.style.setProperty('----sticky-top-left', '-12rem');
                    root.style.setProperty('----sticky-top-right', '-35rem');
                }

                // change font size of the root html element
                document.querySelector('html').style.fontSize = fontSize;
            })
        })

        // Remove active class from colors
        const changeActiveColorClass = () => {
            colorPalette.forEach(colorPicker => {
                colorPicker.classList.remove('active');
            })
        }

        // Change color primary
        colorPalette.forEach(color => {
            color.addEventListener('click', () => {
                let primary;
                changeActiveColorClass();

                if (color.classList.contains('color-1')) {
                    primaryHue = 252;
                } else if (color.classList.contains('color-2')) {
                    primaryHue = 52;
                } else if (color.classList.contains('color-3')) {
                    primaryHue = 352;
                } else if (color.classList.contains('color-4')) {
                    primaryHue = 152;
                } else if (color.classList.contains('color-5')) {
                    primaryHue = 202;
                }

                color.classList.add('active');
                root.style.setProperty('--primary-color-hue', primaryHue);
            })
        })

        //Theme Background Values
        let lightColorLightness;
        let whiteColorLightness;
        let darkColorLightness;

        // Changes background color
        const changeBG = () => {
            root.style.setProperty('--light-color-lightness', lightColorLightness);
            root.style.setProperty('--white-color-lightness', whiteColorLightness);
            root.style.setProperty('--dark-color-lightness', darkColorLightness);
        }

        Bg1.addEventListener('click', () => {
            // add active class
            Bg1.classList.add('active');
            // remove active class from the others
            Bg2.classList.remove('active');
            Bg3.classList.remove('active');
            //remove customized changes from local storage
            window.location.reload();
        });

        Bg2.addEventListener('click', () => {
            darkColorLightness = '95%';
            whiteColorLightness = '20%';
            lightColorLightness = '15%';

            // add active class
            Bg2.classList.add('active');
            // remove active class from the others
            Bg1.classList.remove('active');
            Bg3.classList.remove('active');
            changeBG();
        });

        Bg3.addEventListener('click', () => {
            darkColorLightness = '95%';
            whiteColorLightness = '10%';
            lightColorLightness = '0%';

            // add active class
            Bg3.classList.add('active');
            // remove active class from the others
            Bg1.classList.remove('active');
            Bg2.classList.remove('active');
            changeBG();
        });
    </script>
</body>

</html>