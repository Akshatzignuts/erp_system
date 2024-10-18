<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="footer-left" itemscope itemtype="http://schema.org/Organization" class="h-card">
        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiX_A56Zyh-QLWDJ-1Ugpp732H8h6l0yuCSXPFl2Nf8N0zUb8WKryx4MQPk0gYtsBW5QWHOWVfGwQawGSGjCVIh0vEsih7bqGGEjO7XVI0aGVC5GWVsRMmTLcmrf3_QeLysrpaAZzXIfA375a5ohMaBXh-Pzq3vA-YVLFHiRwkDRrn0aMu_HnnqD7zCr3Vr=s300" alt="Logo" itemprop="logo" class="u-logo logo" />
        <h3 itemprop="name" class="p-name">SDavidPrince<span>Space</span></h3>
        <nav aria-label="Footer Navigation">
            <p class="footer-links">
                <a href="#" class="link-1" itemprop="url">Home</a>
                <a href="#" itemprop="url">Blog</a>
                <a href="#" itemprop="url">Comics</a>
                <a href="#" itemprop="url">Poems</a>
                <a href="#" itemprop="url">Gallery</a>
                <a href="#" itemprop="url">Contact</a>
            </p>
        </nav>
        <p class="footer-name">S David Prince Name © 2024</p>
    </div>
   
    <div class="footer-center">
        <div itemscope itemtype="http://schema.org/PostalAddress" class="p-address">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>
                <span itemprop="streetAddress" class="p-street-address">123 This is a Street</span>,
                <span itemprop="addressLocality" class="p-locality">A Locality</span>,
                <span itemprop="addressRegion" class="p-region">Region state</span>,
                <span itemprop="postalCode" class="p-postal-code">12345</span>
            </p>
        </div>
        <div>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <p itemprop="telephone" class="p-tel">+1 234567890</p>
        </div>
        <div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <p><a href="mailto:support@company.com" itemprop="email" class="u-email">myname@mail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>About this site</span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>
        <div class="footer-socials">
            <a href="#" rel="me" aria-label="Facebook" itemprop="sameAs" class="u-url"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" rel="me" aria-label="Twitter" itemprop="sameAs" class="u-url"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" rel="me" aria-label="LinkedIn" itemprop="sameAs" class="u-url"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#" rel="me" aria-label="GitHub" itemprop="sameAs" class="u-url"><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
</footer>
<style>
    

.footer{
	background: #0d1117;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
  color:#fff!important;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer .footer-left{
	width: 40%;
}


.footer h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer h3 span{
	color:  teal;
}

/* Footer links */

.footer .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer .footer-name{
  color: teal;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer .footer-center{
	width: 35%;
}

.footer .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer .footer-center p a{
	color:  teal;
	text-decoration: none;;
}

.footer .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer .footer-right{
	width: 20%;
}

.footer .footer-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer .footer-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer .footer-socials{
	margin-top: 25px;
}

.footer .footer-socials a{
	display: inline-block;
	font-size: 35px;
	cursor: pointer;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-right: 5px;
	margin-bottom: 5px;
}

.footer .logo {
    max-width: 100px;
    height: 50px;
    width: 50px
    border-radius: 50%; 
    margin-bottom: 15px;
}


@media (max-width: 800px) {

	.footer{
		font: bold 14px sans-serif;
	}

	.footer .footer-left,
	.footer .footer-center,
	.footer .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer .footer-center i{
		margin-left: 0;
	}

}

</style>