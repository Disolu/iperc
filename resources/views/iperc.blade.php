<!DOCTYPE html>
<html>
<head>
	<title>Registro Iperc demo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('dist/css/bootstrap-multiselect.css') }}" type="text/css">

</head>
<body>
	<div class="container">
	<!--input type="text" class="form-control" placeholder="Text input"-->

	<div class="btn-group"> <a class="btn btn-default dropdown-toggle btn-select2" data-toggle="dropdown" href="#">Selecciona un Peligro <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#" data-id="1">Caida mismo nivel</a></li>
                <li><a href="#" data-id="2">Temperaturas Altas</a></li>
                <li><a href="#" data-id="3">Superficie Caliente</a></li>
            </ul>
        </div>


		<select id="example-getting-started" multiple="multiple">
           <!--<option value="op1">Golpes</option>
           <option value="op2">Quemaduras</option>
           <option value="op3">op3</option>
           <option value="op4">op4</option>
           <option value="op5">op5</option>
           <option value="op6">Op6</option>-->
        </select>



<div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;">None selected <b class="caret"></b></button><ul class="multiselect-container dropdown-menu" style="max-height: 150px; overflow-y: auto; overflow-x: hidden;"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text" placeholder="Search"></div><li class=""><a href="javascript:void(0);" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all">  Select all</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="1"> 1</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="2"> 2</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="3"> 3</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="4"> 4</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="5"> 5</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="6"> 6</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="7"> 7</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="8"> 8</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="9"> 9</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="10"> 10</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="11"> 11</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="12"> 12</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="13"> 13</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="14"> 14</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="15"> 15</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="16"> 16</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="17"> 17</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="18"> 18</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="19"> 19</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="20"> 20</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="21"> 21</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="22"> 22</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="23"> 23</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="24"> 24</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="25"> 25</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="26"> 26</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="27"> 27</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="28"> 28</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="29"> 29</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="30"> 30</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="31"> 31</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="32"> 32</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="33"> 33</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="34"> 34</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="35"> 35</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="36"> 36</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="37"> 37</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="38"> 38</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="39"> 39</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="40"> 40</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="41"> 41</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="42"> 42</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="43"> 43</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="44"> 44</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="45"> 45</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="46"> 46</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="47"> 47</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="48"> 48</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="49"> 49</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="50"> 50</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="51"> 51</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="52"> 52</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="53"> 53</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="54"> 54</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="55"> 55</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="56"> 56</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="57"> 57</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="58"> 58</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="59"> 59</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="60"> 60</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="61"> 61</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="62"> 62</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="63"> 63</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="64"> 64</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="65"> 65</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="66"> 66</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="67"> 67</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="68"> 68</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="69"> 69</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="70"> 70</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="71"> 71</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="72"> 72</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="73"> 73</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="74"> 74</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="75"> 75</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="76"> 76</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="77"> 77</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="78"> 78</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="79"> 79</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="80"> 80</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="81"> 81</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="82"> 82</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="83"> 83</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="84"> 84</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="85"> 85</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="86"> 86</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="87"> 87</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="88"> 88</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="89"> 89</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="90"> 90</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="91"> 91</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="92"> 92</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="93"> 93</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="94"> 94</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="95"> 95</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="96"> 96</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="97"> 97</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="98"> 98</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="99"> 99</label></a></li><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" value="100"> 100</label></a></li></ul></div>

	</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/bootstrap-multiselect-collapsible-groups.js') }}"></script>
<script type="text/javascript">

   $(document).ready(function() {
   		//este es el evento para el dropdown de riesgos
    	$(".dropdown-menu li a").click(function(e){ //paso variable del evento e, que es el objeto que realiza el evento, osea el <a>
    		//con esto, selText va a tener el peligro seleccionado,pero no necesitamos el texto, sino el ID
		  var peligroId = $(e.target).data("id");	// el $(e.target) me eprmite covnewrtirlo en un objeto jquery, el data("id") es para chapar el data-id=""
		  cargarRiesgosSegunPeligro(peligroId); //aca lo llamas y le pasas el peligroId
		});

		//ahora necesitamos hacer una llamda ajax , crearemos una funcion que despues llamaremos en el evento de arriba
		var cargarRiesgosSegunPeligro = function(peligroId){
			//aca va neustra llamada ajax
			 $.ajax({
                    type: "GET", // tipo de llamada , GET para obtener datos del servidor, POST para enviar datos al servidor, vamos a obtener los riegos segun peligro
                    url: "http://localhost:8080/iperc/public/api/v1/obtenerRiesgosPorPeligro", // el path de tu llamada, esto se configura en routes.php
                    data: { peligroId: peligroId}, //esta es la data que vas a enviar, que es el Id del peligro seleccionado, lo pasas por parametro desde el evento
                    //lo primero es el nombre del parametro , puede ser cualquier cosa, lo segundo despues de los : es el valor del parametro
                    dataType: "json", // para que lo envie como json
                    contentType: "application/json; charset=utf-8", // encriptacion de contenido
                    success: function (data) {
                       //data es la respuesta del servidor, aqui va lo que pasa cuando todo pasa satisfactoriamente
                       var riesgos = data.riesgos; //recupero el array riesgos que se devuelve del servidor a traves del objeto data.
                       //una vez que ya tienes los riegos de la BD aca llamas a tu otra funcion para armar el multiselect
                    },
                    error: function (data) {
                    	//esto es en caso de error
                        console.log('error');
                        console.log(data);
                    }
                });
		}

		var setearRiesgosMultiselect = function()



    	$('#example-getting-started').multiselect({
            onChange: function(element, checked) {
                if(checked === true) {
                    //primero hay que ver que te devuelve el multiselect
		    		var berrospi = $('#example-getting-started').val();
                }
                else if(checked === false) {
                    var berrospi = $('#example-getting-started').val();		    		
                }
            }
        });	
    });
</script>
<script type="text/javascript">


$("#btnSearch").click(function(){
	alert($('.btn-select').text()+", "+$('.btn-select2').text());
});


</script>

</html>