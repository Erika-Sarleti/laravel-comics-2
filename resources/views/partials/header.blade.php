<header>
    <div class='logo-container'>
        <a href="/">
            <img src="../images/dc-logo.png" alt="DC logo">
        </a>
        
    </div>
    <nav>
        <ul>
            <li class="{{Route::currentRouteName() == 'characters' ? 'active' : '' }}"><a href="characters">CHARACTERS</a></li>
            <li class="{{Route::currentRouteName() == 'comics' ? 'active' : '' }}"><a href="comics">COMICS</a></li>
            <li class="{{Route::currentRouteName() == 'movies' ? 'active' : '' }}"><a href="movies">MOVIES</a></li>
            <li><a href="#">TV</a></li>
            <li><a href="#">GAMES</a></li>
            <li><a href="#">COLLECTIBLES</a></li>
            <li><a href="#">VIDEOS</a></li>
            <li><a href="#">FANS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">SHOP</a></li>
            
        </ul>
    </nav>
    <div class='searchbar'>
        <input type="text">
    </div>
    
</header>
<div class="jumbo">
    <img src="./images/jumbotron.jpg" alt="">
</div>