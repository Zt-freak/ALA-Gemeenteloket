<style>
    /*author: Bryan*/
html {
    margin: 0;
}

body {
    margin: 0;
    background-color: lightpink;
}

h1 {
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

h2 {
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    margin: 0;
    margin-left: 10px;
    margin-bottom: 10px;
    font-size: 16pt;
}

p {
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 14pt;
    line-height: 95%;
}
    
label {
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 14pt;
}

ul li {
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.navImageContainer {
    height: 200px;
    width: 100%;
    background-color: rgb(255, 243, 243);
    background-image: url(images/sagiri.jpg);
    background-attachment: fixed;
    background-size: auto 200px;
    background-position: center top;
    background-repeat: no-repeat;
    clear: both;
}

.langSelector {
    float: right;
    width: 120px;
    margin: 20px;
    text-align: center;
}

.langSelector tr td {
    width: calc(100% / 3);
}

.langSelector tr td img {
    position: relative;
    width: 50px;
    margin: 6px;
    -webkit-transition: width 200ms, margin 200ms;
    transition: width 200ms, margin 200ms;
}

.langSelector tr td img:hover {
    width: 60px;
    margin: 1px;
}

.logoContainer {
    float: left;
    width: 250px;
    height: 80px;
    margin: 20px;
    background-image: url(../images/Gemeente%20Pekela%20Teal.svg);
    background-size: 100%;
    background-repeat: no-repeat;
}

.menuContainer {
    width: 100%;
    background-color: RGB(0, 128, 128);
    background: linear-gradient(to right, RGB(0, 128, 128)  , RGBA(0, 128, 128, 0) 95%);
}

.menuButton {
    background-color: RGB(0, 128, 128);
    background: RGBA(0, 128, 128, 0);
    border: none;
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-weight: bold;
    font-size: 15pt;
    cursor: pointer;
}
.menuButton:hover {
    background: rgb(0, 98, 98);
    -webkit-transition: background-color 200ms linear;
    -ms-transition: background-color 200ms linear;
    transition: background-color 200ms linear;
}

.content {
    background-color: lightpink;
}

.contentContainer {
    float: left;
    width: 80%;
    padding-left: 2px;
}

.articleImage {
    width: 500px;
}

.articleImageContainer {
    width: max-content;
    display: block;
    text-align: center;
    border-radius: 5px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
    margin: 0 auto;
    overflow: hidden;
}

.caption {
    margin: 0;
    font-size: 10pt;
}

.captionContainer {
    display: block;
    width: 500px;
    font-style: italic;
    margin: 0 auto;
}
    
.submitButton {
    background-color: RGB(0, 128, 128);
    border: none;
    color: white;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-weight: bold;
    font-size: 15pt;
    cursor: pointer;
}

.submitButton:hover {
    background-color: lightpink;
    color: white;
    -webkit-transition: background-color 200ms linear;
    -ms-transition: background-color 200ms linear;
    transition: background-color 200ms linear;
}

.inverseSubmitButton {
    background-color: white;
    border: none;
    color: RGB(0, 128, 128);
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-weight: bold;
    font-size: 15pt;
    cursor: pointer;
}

.inverseSubmitButton:hover {
    background-color: lightpink;
    color: white;
    -webkit-transition: background-color 200ms linear;
    -ms-transition: background-color 200ms linear;
    transition: background-color 200ms linear;
}

.appointmentCheck {
    background-color: RGB(0, 128, 128);
    padding: 10px;
}

.sideContent {
    float: right;
    width: 250px;
    padding-top: 30px;
    padding-bottom: 20px;
}

.sideContentParagraph {
    font-size: 12pt;
    margin-left: 10px;
}

.separator {
    float: center;
    height: 2px;
    border-top: RGB(0, 128, 128) solid 2px;
    margin-bottom: 10px;
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
}

.socialMedia {
    width: 100%;
    text-align: center;
}

.socialMedia tr td{
    width: 40px;
    text-align: center;
}

.facebookIcon {
    background-image: url(../images/Facebook%20White.svg);
    background-size: contain;
    margin: 0 auto;
    width: 30px;
    height: 30px;
}

.twitterIcon {
    background-image: url(../images/Twitter%20White.svg);
    background-size: contain;
    margin: 0 auto;
    width: 30px;
    height: 30px;
}

.adviserment {
    width:250px;
}

.footerImageContainer {
    height: 200px;
    width: 100%;
    background-color: rgb(255, 243, 243);
    background-image: url(../images/testimage2.jpg);
    background-attachment: fixed;
    background-size: 100%;
    background-position: center bottom;
    background-repeat: no-repeat;
    clear: both;
}

@media (max-width:1500px) {
      .contentContainer {
        width: 60%;
      }
}

@media (max-width:800px) {
      .articleImage {
        width: 350px;
      }
      .captionContainer {
        width: 350px;
      }
}

@media (max-width:700px) {
      .langSelector {
        width: 100%;
        float: none;
        clear: both;
      }
      .menuContainer {
        background-color: RGB(0, 128, 128);
        padding: 0;
        margin: 0;
      }
      .menuButton {
        width: 100%;
      }
      .contentContainer {
        width: 90%;
        margin: 5%;
      }
      .sideContent {
        width: 100%;
        background-color: RGB(0, 128, 128);
        padding-top: 40px;
        padding-bottom: 40px;
      }
      .separator {
        border-top: lightpink solid 2px;
      }
      .sideContent iframe {
        width: 100%;
        height: 300px;
      }
      .facebookIcon, .twitterIcon {
        width: 60px;
        height: 60px;
      }
      .footerImageContainer {
        display: none;
      }
      .adviserment {
        display: none;
      }
}
</style>
<iframe width="0" height="0" src="https://www.youtube.com/embed/fRyaX6yN4vs?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>