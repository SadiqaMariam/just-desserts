<?php 
    function getFooter(){
        return      
        <<<HTML
            <footer class="footer">
                <div class="footerNavigate">
                    <p class="footerTitles">Navigations</p>
                    <div class="footerOptions footerNavigationOptions">
                        <a href="">Home</a>
                        <a href="">Menu</a>
                        <a href="">Contact</a>
                    </div>
                </div>
                <div class="footerMenu">
                    <p class="footerTitles">Menu</p>
                    <div class="footerOptions footerMenuOptions">
                        <a href="">Cupcakes</a>
                        <a href="">Ice Creams</a>
                        <a href="">Cakes</a>
                    </div>
                </div>
                <div class="footerContactUs">
                    <p class="footerTitles">Contact</p>
                    <div class="footerOptions footerContactOptions">
                        <a href="">Tel : +6161-6161</a>
                        <a href="">Email : justdesserts@mail.com</a>
                        <a href="">Provide feedback</a>
                    </div>
                </div>
                <div class="footerLogo">
                    <img class="img footerLogo" src="images/JustDessertsLogo.png" />
                </div>
            </footer>
HTML;
    }
?>