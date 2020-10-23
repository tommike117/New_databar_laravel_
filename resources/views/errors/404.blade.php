<!DOCTYPE html>
<html>
<head>
    <title>Page not found - 404</title>
</head>
<body>
<div class="session">
    <div class="bg-404">
        <img class="desktop-404" width="100%" src="{{URL::asset('/images/errors/404-desktop.png')}}" alt="">
        <div class="tablet-404">
            <div class="plugin">
                <div class="child-plugin">
                    <img width="100%" src="{{URL::asset('/images/errors/404-tablet-left.png')}}" alt="">
                </div>
                <div class="child-plugin">
                    <img width="100%" src="{{URL::asset('/images/errors/404-tablet-right.png')}}" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <div class="title-header">
        <p class="title-content">
            Sorry, the page you're looking for is not available.
        </p>
        <a href="{{ URL::route('home-page')}}" class="btn btn-info mt-5">GO TO HOMEPAGE</a>
    </div>
</div>

 
</body>
</html>

<style>
@import url(https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Prompt);

@media all and (min-width: 0px) {
    .desktop-404 {
        display:none;
    }
    .tablet-404{
        margin-top:15%;
        display:block;
    }
    .title-header{
        top:60%;
    }
}

@media all and (min-width: 900px) {
    .desktop-404 {
        display:block;
    }
    .tablet-404{
        display:none;
    }
    .session {
        align-items: center;
    }
    .title-header{
        top:50%;
        transform: translate(0%, -50%);
    }
}

body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", "Prompt", sans-serif;
    
}


/* Tablet */
.plugin{
    width:100%;
    display: flex;
    flex-flow: row wrap;
    /* flex-flow: row wrap; */
}
.plugin > * {
    flex:1;
}

.child-middle { 
    width: 300px; 
    margin:auto auto -10%;
}

.session{
    display: flex;
    width:100%;
    height: 99vh;
    justify-content: center;
}

.tablet-404{
    width:100%;
}

.bg-404{
    width:100%;

    position: relative;
}

.title-header{
    position: absolute;
    text-align: center;
    width: 300px;
    margin: 0 auto;
}
p{
    color:#0066cc;
}
.title-content{
    font-size:20px;
}

.btn{
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: .9rem;
    line-height: 1.6;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

.btn-info {
    /* color: #0066cc; */
    color:#fff;
    background-color: #0066cc;
    border-radius: 25px;
    text-decoration: none;
    width:150px;

}

.mt-5{
    margin:20px 0 0;
}

</style>