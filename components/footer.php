<?php 
    function getFooter(){
        return      
<<<HTML
            <footer class="footer">
                <div class="footerNavigate">
                    <p class="footerTitles">Navigations</p>
                    <div class="footerOptions footerNavigationOptions">
                        <a href="home.php">Home</a>
                        <a href="menu.php">Menu</a>
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
                <div class="footerMenu">
                    <p class="footerTitles">Menu</p>
                    <div class="footerOptions footerMenuOptions">
                        <a href="cupcakes.php">Cupcakes</a>
                        <a href="icecreams.php">Ice Creams</a>
                        <a href="cakes.php">Cakes</a>
                    </div>
                </div>
                <div class="footerContactUs">
                    <p class="footerTitles">Contact</p>
                    <div class="footerOptions footerContactOptions">
                        <a href="contact.php">Tel : +6556-6556</a>
                        <a href="contact.php">Email : justdesserts@mail.com</a>
                        <a href="contact.php">Provide feedback</a>
                    </div>
                </div>
                <div class="footerLogo">
                    <img class="img footerLogo" src="images/JustDessertsLogo.png" />
                </div>
            </footer>
HTML;
    }
?>