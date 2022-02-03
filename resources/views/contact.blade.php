@extends('layouts.contenttailwind')
@section('title')
    Onze contact pagina.
@endsection
@section('undertitle')
    U kunt ons bereiken met de middelen die hieronder staan!
@endsection
@section('content')
    <!-- Contact -->
    <section class="sectionSize bg-secondary justify-center md:justify-between md:items-center flex flex-col">
        <div class="md:grid md:grid-cols-5 md:grid-rows-1">
            <div class="flex items-start font-montserrat my-6 mr-10">
                <div>
                    <h3 class="font-semibold text-2xl">Email</h3>
                    <p>
                        info@stonkspizza.online
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <div>
                    <h3 class="font-semibold text-2xl">Telefoonnummer</h3>
                    <p>
                        ##telefoonnummer##
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <div>
                    <h3 class="font-semibold text-2xl">Social Media</h3>
                    <p>
                        Youtube: ##Youtube## <br> Twitter: ##Twitter## <br> Instagram: ## Instagram <br> TikTok: ##TikTok##
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <div>
                    <h3 class="font-semibold text-2xl">Adres</h3>
                    <p>
                        6969 PP, Eindhoven <br> Noord Brabant, Nederland
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <div>
                    <h3 class="font-semibold text-2xl">Maps</h3>
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28125.55347310613!2d5.507559496855457!3d51.45868524101335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d46a1fd9a7%3A0x2683f0238844f87a!2sSumma%20College!5e0!3m2!1snl!2snl!4v1643198757844!5m2!1snl!2snl" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
