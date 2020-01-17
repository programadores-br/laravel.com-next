@extends('partials.layout')

@section('content')
    @include('partials.header')

    <div class="home standard_layout">
        <div class="remodal-bg">
            <div class="content_contain" style="padding-bottom: 4.5em;">
                <div class="page_contain">
                    <div class="banner">
                        <a href="https://vapor.laravel.com/">
                            <div class="banner_icon icon_nova">
                                <img src="/img/ecosystem/vapor.min.svg" alt="Nova">
                            </div>
                            <div class="banner_content">
                                <p class="small">Laravel Vapor Esta disponível! Inscreva=se hoje!
                                    <span class="arrow">→</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="contain">
                        <section class="hero">
                            <div class="hero_bg">
                                <video poster="/img/hero/hero_poster.jpg" playsinline autoplay muted loop>
                                    <source src="/img/hero/hero.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="hero_content">
                                <h1>O Framemork PHP para Artesãos Web</h1>
                                <p>Laravel é um framework web com sintaxe expressiva e elegante. Nós já lançamos as bases — Deixando você livre para criar sem se preocupar com os detalhes.</p>
                                <div class="hero_actions">
                                    <a href="/docs" class="btn"><span>Documentação</span></a>
                                    <a href="https://laracasts.com" data-remodal-target="video_modal" class="btn secondary"><span><img src="/img/icons/play.min.svg" alt="Play Video"><span>Assista o Laracasts</span></span></a>

<!--                                     <div data-remodal-id="video_modal" class="video_modal remodal">
                                        <div class="video_contain">
                                            <button data-remodal-action="close" class="remodal-close"></button>
                                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/cAGQGXtBvs4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                    </div>
<!--                     <ul class="logos_list">
                        <li><img src="/img/logos/wwe.min.svg" alt="WWE"></li>
                        <li><img src="/img/logos/discovery.min.svg" alt="Discovery"></li>
                        <li><img src="/img/logos/mcdonalds.min.svg" alt="McDonalds"></li>
                        <li><img src="/img/logos/apple.min.svg" alt="Apple"></li>
                        <li><img src="/img/logos/fox.min.svg" alt="20th Century Fox"></li>
                        <li><img src="/img/logos/mcgraw_hill.min.svg" alt="McGraw Hill"></li>
                    </ul> -->
                    <div class="contain">
                        <div class="content_block img_left">
                            <div class="bg">
                                <video poster="/img/blocks/blocks_3.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_3.mp4" type="video/mp4">
                                </video>
                            </div>
                            @if (SHOW_VAPOR)
                                <div class="image">
                                    <img src="/img/homepage/vapor.jpg" alt="Vapor">
                                </div>
                                <div class="content">
                                    <h1>Laravel Vapor</h1>
                                    <p>Laravel Vapor é uma plataforma de deploy serverless para Laravel, Fornecida pela AWS. Suba sua infraestrutura Laravel no Vapor e encante-se com a escalabilidade e simplicidade do serverless.</p>
                                    <a href="https://vapor.laravel.com" class="btn"><span>Learn More</span></a>
                                </div>
                            @else
                                <div class="image">
                                    <img src="/img/homepage/forge.jpg" alt="Forge">
                                </div>
                                <div class="content">
                                    <h1>Laravel Forge</h1>
                                    <p>Plataformas instantaneas na DigitalOcean, Linode, e mais. Apresentando push-to-deploy, Redis, queues, e tudo o mais que você precisa para subir e implementar aplicações Laravel impressionantes.</p>
                                    <a href="https://forge.laravel.com" class="btn"><span>Saiba mais</span></a>
                                </div>
                            @endif
                        </div>

                        <div class="ecosystem_block">
                            <div class="heading">
                                <h6>Revolucione como você controi a web.</h6>
                                <h1>O Ecosistema Laravel</h1>
                            </div>
                            <ul class="ecosystem">
                                <li class="sys_vapor">
                                    <a href="https://vapor.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/vapor.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Vapor <span>Plataforma Serverless</span></div>
                                    </a>
                                </li>
                                <li class="sys_forge">
                                    <a href="https://forge.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/forge.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Forge <span>Gerenciamento de Servidor</span></div>
                                    </a>
                                </li>
                                <li class="sys_envoyer">
                                    <a href="https://envoyer.io">
                                        <div class="system_icon"><img src="/img/ecosystem/envoyer.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Envoyer <span>Implantação Zero Downtime</span></div>
                                    </a>
                                </li>
                                <li class="sys_horizon">
                                    <a href="/docs/{{DEFAULT_VERSION}}/horizon">
                                        <div class="system_icon"><img src="/img/ecosystem/horizon.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Horizon <span>Monitoramento de filas</span></div>
                                    </a>
                                </li>
                                <li class="sys_nova">
                                    <a href="https://nova.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/nova.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Nova <span>Painel Administrativo</span></div>
                                    </a>
                                </li>
                                <li class="sys_echo">
                                    <a href="/docs/{{DEFAULT_VERSION}}/broadcasting">
                                        <div class="system_icon"><img src="/img/ecosystem/echo.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Echo <span>Eventos Realtime</span></div>
                                    </a>
                                </li>
                                <li class="sys_lumen">
                                    <a href="https://lumen.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/lumen.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Lumen <span>Micro-Framework</span></div>
                                    </a>
                                </li>
                                <li class="sys_homestead">
                                    <a href="/docs/{{DEFAULT_VERSION}}/homestead">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/homestead.min.svg" alt="Icon"></div>
                                        <div class="system_info">Homestead <span>Vagrant Box Pré-empacotado</span></div>
                                    </a>
                                </li>
                                <li class="sys_spark">
                                    <a href="https://spark.laravel.com">
                                        <div class="system_icon"><img src="/img/ecosystem/spark.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Spark <span>SaaS App Scaffolding</span></div>
                                    </a>
                                </li>
                                <li class="sys_valet">
                                    <a href="/docs/{{DEFAULT_VERSION}}/valet">
                                        <div class="system_icon"><img src="/img/ecosystem/valet.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Valet <span>Ambiente de desenvolvimento para Macs</span></div>
                                    </a>
                                </li>
                                <li class="sys_mix">
                                    <a href="/docs/{{DEFAULT_VERSION}}/mix">
                                        <div class="system_icon"><img src="/img/ecosystem/mix.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Mix <span>Compilador Webpack</span></div>
                                    </a>
                                </li>
                                <li class="sys_cashier">
                                    <a href="/docs/{{DEFAULT_VERSION}}/billing">
                                        <div class="system_icon"><img src="/img/ecosystem/cashier.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Cashier <span>Faturamento de assinaturas</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_dusk">
                                    <a href="/docs/{{DEFAULT_VERSION}}/dusk">
                                        <div class="system_icon"><img src="/img/ecosystem/dusk.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Dusk <span>Browser Testing e Automação</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="sys_passport">
                                    <a href="/docs/{{DEFAULT_VERSION}}/passport">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/passport.min.svg" alt="Icon"></div>
                                        <div class="system_info">Passport <span>Implementação simples do OAuth2</span></div>
                                    </a>
                                </li>
                                <li class="sys_scout">
                                    <a href="/docs/{{DEFAULT_VERSION}}/scout">
                                        <div class="system_icon"><img src="/img/ecosystem/scout.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Scout <span>Pesquisa de texto</span></div>
                                    </a>
                                </li>
                                <li class="sys_socialite">
                                    <a href="/docs/{{DEFAULT_VERSION}}/socialite">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/socialite.min.svg" alt="Icon"></div>
                                        <div class="system_info">Socialite <span>Autenticação OAuth</span></div>
                                    </a>
                                </li>
                                <li class="sys_telescope">
                                    <a href="/docs/{{DEFAULT_VERSION}}/telescope">
                                        <div class="system_icon">
                                            <img src="/img/ecosystem/telescope.min.svg" alt="Icon"></div>
                                        <div class="system_info">Telescope <span>Assitente de Debug</span></div>
                                    </a>
                                </li>
                                <li class="sys_tinker">
                                    <a href="https://github.com/laravel/tinker">
                                        <div class="system_icon"><img src="/img/ecosystem/tinker.min.svg" alt="Icon">
                                        </div>
                                        <div class="system_info">Tinker <span>REPL Interativo</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="content_block bg_right resources">
                            <div class="content">
                                <h6>Recursos</h6>
                                <h1>Uma comunidade criada para pessoas como você</h1>
                                <p>Se você é um desenvolvedor solo ou uma equipe de 20 pessoas, começar é facil, graças a nossa grande comunidade.</p>
                                <ul class="resource_list">
                                    <li><a href="https://blog.laravel.com">Blog</a></li>
                                    <li><a href="https://laracasts.com">Laracasts</a></li>
                                    <!-- <li><a href="http://laravelpodcast.com/">Podcast</a></li> -->
                                    <li><a href="https://laravel-news.com">Laravel News</a></li>
                                    <li><a href="https://laracon.us/">Laracon</a></li>
                                    <li><a href="https://larajobs.com/">Empregos</a></li>
                                    <li><a href="https://laracon.eu/">Laracon EU</a></li>
                                    <li><a href="https://laracasts.com/discuss">Forums</a></li>
                                    <li><a href="https://laracon.com.au/">Laracon AU</a></li>
                                    <li><a href="https://certification.laravel.com/">Certificação</a></li>
                                </ul>
                            </div>

                            <div class="featured_resource">
                                <div class="resource_icon">
                                    <img src="/img/icons/laracasts.min.svg" alt="Laracasts">
                                </div>
                                <h6>Recurso em destaque</h6>
                                <h3>Laracasts</h3>
                                <p class="small">Nove em cada dez médicos recomendam Laracasts ao inves de marcas concorrentes. Veja por si mesmo, e aumente de forma significativa suas habilidades de desenvolvimento no processo.</p>
                                <a href="https://laracasts.com" class="btn secondary"><span>Start Learning →</span></a>
                            </div>
                            <div class="bg">
                                <video poster="/img/blocks/blocks_4.jpg" playsinline autoplay muted loop>
                                    <source src="/img/blocks/blocks_4.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
