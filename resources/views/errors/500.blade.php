<!DOCTYPE html>
<html>
<head>
    <title>Page not found - 500</title>
</head>
<body>
<div class="session">
    <div class="bg-500">
        <img class="desktop-500" width="100%" src="{{URL::asset('/images/errors/500-desktop.png')}}" alt="">
        <div class="tablet-500">
            <div class="child-middle">
                <img width="100%" src="{{URL::asset('/images/errors/500-tablet-middle.png')}}" alt="">
            </div>
            <div class="plugin">
                <div class="child-plugin">
                    <img width="100%" src="{{URL::asset('/images/errors/500-tablet-left.png')}}" alt="">
                </div>
                <div class="child-plugin">
                    <img width="100%" src="{{URL::asset('/images/errors/500-tablet-right.png')}}" alt="">
                </div>
                
            </div>
        </div>
    </div>
    <div class="title-header">
        <p class="title-content">
            This page isn't working, Internal server error
        </p>
        <a href="{{ URL::route('home-page')}}" class="btn btn-info mt-5">GO TO HOMEPAGE</a>
    </div>
</div>

 
</body>
</html>

<style>
@import url(https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Prompt);


@media all and (min-width: 0px) {
    .desktop-500 {
        display:none;
    }
    .tablet-500{
        display:block;
    }
}

@media all and (min-width: 900px) {
    .desktop-500 {
        display:block;
    }
    .tablet-500{
        display:none;
    }
    .session{
        align-items: center;
    }
}

body {
    margin: 0;
    padding: 0;
    font-family: "Poppins", "Prompt", sans-serif;
    
}

.bg-500{
    width:100%;
}

.tablet-500{
    width:100%;
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

/* Desktop */
.session{
    display: flex;
    width:100%;
    height: 99vh;
    justify-content: center;
}
.title-header{
    position: absolute;
    text-align: center;
    width: 450px;
    margin: 0 auto;
    top: 65%;
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