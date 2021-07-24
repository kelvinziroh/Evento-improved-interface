<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento | Landing</title>
    <style>
        /* general styling */
        * {
            margin: 0;
        }

        body {
            height: 100vh;
            display: grid;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            grid-template-rows: 8.5% auto 8.5%;
        }

        header {
            grid-row: 1 / 2;
            border-bottom: 1px solid #ccc;
        }

        header ul {
            padding: 0;
            float: right;
        }

        header ul li {
            list-style: none;
            padding: 20px;
        }

        header ul li a {
            text-decoration: none;
            margin: 20px 30px 0 30px;
            padding: 20px;
            border: 1px solid #888;
            color: #fff;
            background-color: #000;
        }

        header ul li a:hover {
            color: #000;
            background-color: #fff;
        }

        main {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            height: 100%;
            grid-row: 2 / 3;
        }

        footer {
            grid-row: 3 / 4;
            border-top: 1px solid #ccc;
        }

        footer p {
            margin: 15px 30px;
        }

        aside {
            grid-column: 1 / 3;
            text-align: center;
            padding: 100px 15px 15px 15px;
            border-right: 1px solid #ccc;
        }

        article {
            grid-column: 3 / -1;
            padding: 56px 15px 15px 50px;
        }

        #aside-navigation {
            padding: 0;
        }

        #aside-navigation li{
            list-style: none;
            padding: 5px;
            text-align: center;
        }

        .user-navigation {
            display: inline-block;
            padding: 10px;
            width: 60%;
            text-decoration: none;
            border: 1px solid #888;
            color: #fff;
            background-color: #000;
        }

        .user-navigation:hover {
            color: #000;
            background-color: #fff;
        }

        /* profile */
        .profile-img {
            border-radius: 50%;
        }

        .profile-aside-img {
            margin-bottom: 20px;
        }

        .profile-article-img {
            height: 150px;
            width: 150px;
            margin-top: 25px;
            margin-right: 15px;
        }

        input {
            display: block;
            padding: 15px;
            margin: 10px;
            width: 545px;
            border: 1px solid #ccc;
        }

        form {
            width: 600px;
            margin: 20px;
        }

        #profile-button {
            width: 577px;
            color: #fff;
            background-color: #000;
        }

        #profile-activity {
            display: flex;
            padding: 20px;
            width: 90%;
        }

        /* equipments and services */
        #item-equipment {
            display: flex;
            flex-wrap: wrap;
            padding-top: 80px;
        }

        .card-link {
            text-decoration: none;
            width: 30%;
            margin-right: auto;
            margin-left: auto;
        }

        .card {
            border: 1px solid #ccc;
            width: 100%;
            text-align: center;
        }

        .card:hover {
            border: 1px solid #000;
        }

        .card ul {
            padding: 0;
            display: inline-block;
        }

        .card ul li {
            list-style: none;
            display: block;
            padding: 10px;
            color: #000;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="#">Logout</a></li>
        </ul>
    </header>
    <main>
        <aside>
            <img src="https://via.placeholder.com/150" alt="user profile" class="profile-img profile-aside-img">
            <ul id="aside-navigation">
                <li><a href="{{route('view_profile')}}" class="user-navigation">Profile</a></li>
                <li><a href="{{route('activity')}}" class="user-navigation">Activity</a></li>
                <li><a href="{{route('equipment')}}" class="user-navigation">Equipment</a></li>
                <li><a href="{{route('services')}}" class="user-navigation">Services</a></li>
            </ul>
        </aside>
        <article>
            <section id="item-equipment">
                <a href="{{route('description')}}" class="card-link">
                    <div class="card equipment">
                        <ul>
                            <li><span class="card-info-labels">Service:</span> name</li>
                            <li><span class="card-info-labels">Vendor:</span> username</li>
                        </ul>
                    </div>
                </a>
                <a href="{{route('description')}}" class="card-link">
                    <div class="card equipment">
                        <ul>
                            <li><span class="card-info-labels">Service:</span> name</li>
                            <li><span class="card-info-labels">Vendor:</span> username</li>
                        </ul>
                    </div>
                </a>
                <a href="{{route('description')}}" class="card-link">
                    <div class="card equipment">
                        <ul>
                            <li><span class="card-info-labels">Service:</span> name</li>
                            <li><span class="card-info-labels">Vendor:</span> username</li>
                        </ul>
                    </div>
                </a>
            </section>
        </article>
    </main>
    <footer>
        <p>&copy2021 Evento, Inc.</p>
    </footer>
</body>
</html>