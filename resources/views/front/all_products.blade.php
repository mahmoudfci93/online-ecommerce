@extends('layout.inner')


@section('content')
    <div class="main">

        <div class="container">

            <ul class="content-home">
                @forelse($products as $product)
                    <li class="col-sm-4">

                        @foreach($product->image as $image)
                            <a href="{{route('watch',$product->id)}}" class="item-link" title="">

                                <div class="bannerBox">

                                    <img src="{{url('uploads',$image->name)}}" class="item-img" title="" alt="" width="100%" height="100%">

                                    <div class="item-html">
                                        <h3><span>{{$product->category->name}}</span></h3>
                                        <p>{{$product->overview}}</p>
                                        <button>Shop now!</button>
                                    </div>
                                </div>
                                @break

                            </a>
                        @endforeach

                    </li>
                @empty
                    <h4> No Watches Found !!</h4>
                @endforelse
            </ul>

        </div>

        <div class="content_middle_bottom">
            <div class="header-left" id="home">
                <section>
                    <ul class="lb-album" >
                        <li>
                            <a href="#image-1">
                                <img src="{{asset('dist/images/g1.jpg')}}"  class="img-responsive" alt="image01"/>
                                <span>Pointe</span>
                            </a>
                            <div class="lb-overlay" id="image-1">
                                <a href="#page" class="lb-close">x Close</a>
                                <img src="{{asset('dist/images/g1.jpg')}}"  class="img-responsive" alt="image01"/>
                                <div>
                                    <h3>pointe <span>/point/</span></h3>
                                    <p>Dance performed on the tips of the toes</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#image-2">
                                <img src="{{asset('dist/images/g2.jpg')}}"  class="img-responsive" alt="image02"/>
                                <span>Port de bras</span>
                            </a>
                            <div class="lb-overlay" id="image-2">
                                <img src="{{asset('dist/images/g2.jpg')}}"  class="img-responsive" alt="image02"/>
                                <div>
                                    <h3>port de bras <span>/ˌpôr də ˈbrä/</span></h3>
                                    <p>An exercise designed to develop graceful movement and disposition of the arms</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-2">
                                <img src="{{asset('dist/images/g2.jpg')}}"  class="img-responsive" alt="image02"/>
                                <span>Plié</span>
                            </a>
                            <div class="lb-overlay" id="image-2">
                                <img src="{{asset('dist/images/g2.jpg')}}"  class="img-responsive" alt="image02"/>
                                <div>
                                    <h3>pli·é <span>/plēˈā/</span></h3>
                                    <p>A movement in which a dancer bends the knees and straightens them again</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-4">
                                <img src="{{asset('dist/images/g4.jpg')}}"  class="img-responsive" alt="image04"/>
                                <span>Adagio</span>
                            </a>
                            <div class="lb-overlay" id="image-4">
                                <img src="{{asset('dist/images/g4.jpg')}}"  class="img-responsive" alt="image04"/>
                                <div>
                                    <h3>a·da·gio <span>/əˈdäjō/</span></h3>
                                    <p>A movement or composition marked to be played adagio</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-5">
                                <img src="{{asset('dist/images/g5.jpg')}}"  class="img-responsive" alt="image05"/>
                                <span>Frappé</span>
                            </a>
                            <div class="lb-overlay" id="image-5">
                                <img src="{{asset('dist/images/g5.jpg')}}"  class="img-responsive" alt="image05"/>
                                <div>
                                    <h3>frap·pé<span>/fraˈpā/</span></h3>
                                    <p>Involving a beating action of the toe of one foot against the ankle of the supporting leg</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-6">
                                <img src="{{asset('dist/images/g6.jpg')}}"  class="img-responsive" alt="image06"/>
                                <span>Glissade</span>
                            </a>
                            <div class="lb-overlay" id="image-6">
                                <img src="{{asset('dist/images/g6.jpg')}}"  class="img-responsive" alt="image06"/>
                                <div>
                                    <h3>glis·sade <span>/gliˈsäd/</span></h3>
                                    <p>One leg is brushed outward from the body, which then takes the weight while the second leg is brushed in to meet it</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-7">
                                <img src="{{asset('dist/images/g7.jpg')}}"  class="img-responsive" alt="image07"/>
                                <span>Jeté</span>
                            </a>
                            <div class="lb-overlay" id="image-7">
                                <img src="{{asset('dist/images/g7.jpg')}}"  class="img-responsive" alt="image07"/>
                                <div>
                                    <h3>je·té <span>/zhə-ˈtā/</span></h3>
                                    <p>A springing jump made from one foot to the other in any direction</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-8">
                                <img src="{{asset('dist/images/g8.jpg')}}"  class="img-responsive" alt="image08"/>
                                <span>Piqué</span>
                            </a>
                            <div class="lb-overlay" id="image-8">
                                <img src="{{asset('dist/images/g8.jpg')}}"  class="img-responsive" alt="image08"/>
                                <div>
                                    <h3>pi·qué <span>/pēˈkā/</span></h3>
                                    <p>Strongly pointed toe of the lifted and extended leg sharply lowers to hit the floor then immediately rebounds upward</p>
                                </div>
                                <a href="#page" class="lb-close">x Close</a>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </section>
            </div>
        </div>
    </div>

@endsection