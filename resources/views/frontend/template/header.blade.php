@extends('frontend/template/header-html')
    {{--	// $sessionUsuario = $this->session->userdata('logged_in');
      // $nomeUsuario = $sessionUsuario['nome']; --}}


    <!-- start header -->
    <div class="top_bg">
    <div class="wrap">
    	<div class="header">
    		<div class="logo">
    			<a href="{{asset('home') }}"><img src="resources/assets/frontend/web/images/logo.png" alt=""/></a>
    		</div>
    		 <div class="log_reg">
    			 @if (True)

    				 <ul>
     					<li>
    						<a href="{{asset('home/perfil') }}">
    					    @if (true)
    								<img src="resources/assets/frontend/web/images/usericon.png" align="left">
                  @endif
                  {{ 'teste' }}
      						{{--$nomeUsuario--}}
    					 	</a>
    					</li>
     					<div class="header_right">
     						<ul>
     							<li><a href="#"><i  class="cart"></i><span>0</span></a></li>
     						</ul>
     					</div>
     					<div class="clear"></div>
     				</ul>

            @else
    				<ul>
    					<li><a href="{{asset('home/login') }}"title="Entre ou cadastre-se"> <img src="asset('resources/assets/frontend/web/images/usericon.png') " align="left">
                                        Oi, tudo bem? :)<br>Entre ou cadastre-se
                </a></li>
    					<div class="header_right">
    						<ul>
    							<li><a href="#"><i  class="cart"></i><span>0</span></a></li>
    						</ul>
    					</div>
    					<div class="clear"></div>
    				</ul>

            @endif

    		</div>
    		<div class="web_search">
    		 	<form>
    				<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" placeholder="O que você procura?">
    				<input type="submit" value=" " />
    			</form>
    	    </div>
    		<div class="clear"></div>
    	</div>
    </div>
    </div>

    <!-- start header_btm -->
    <div class="wrap">
    <div class="header_btm">


     <!-- $sessionUsuario = $this->session->userdata('logged_in'); -->
    	  @if (False)


    	<div class="menu">
    		<ul>
    			<li><a href="{{asset('home_dashboard') }}">Início</a></li>
    			<li>
    				<a href="{{asset('home_dashboard/products') }}">Produtos</a>
    			</li>
    			<li><a href="{{asset('home_dashboard/packaging') }}">Embalagens</a></li>
    			<li><a href="{{asset('home_dashboard/clients') }}">Clientes</a></li>
    			<li><a href="{{asset('home_dashboard/reports') }}">Emissão de Relatórios</a></li>
    			<div class="clear"></div>
    		</ul>
    	</div>




    @else



    		<div class="menu">
    			<ul>
    				<li><a href="{{asset('home')}} ">Início</a></li>
    				<li>
    					<a href="{{asset('home/products') }}">Produtos</a>
    				</li>

    				<li><a href="{{asset('home/about') }}">Sobre</a></li>
    				<li><a href="{{asset('home/contact') }}">Contato</a></li>
    				<li><a href="{{asset('home/simulador') }}">Simular venda</a></li>
    				<div class="clear"></div>
    			</ul>
    		</div>

    	@endif

    		<div id="smart_nav">
    			<a class="navicon" href="#menu-left"> </a>
    		</div>

    	<div class="clear"></div>
    </div>
    </div>


    @yield('body')
