<style>
    *{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: 'Lato', sans-serif;
    color: #000;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 20px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #000;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}

</style>

<div id="main">
    	<div class="fof">
        <div class="logo">
            <a href="/"> <img src="{{$app->request->get('api_shortname')}}/img/logo/{{$app->request->get('api_shortname')}}-logo.png" alt=""></a>
        </div><br>
        <h1>Oops, page does not exist</h1>
    	</div>
</div>