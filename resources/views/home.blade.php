<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="text-white">
            <div class=" mt-3">
                <div class="text-center">
                    <img src="{{ asset('images/profile.JPEG') }}" alt="" class="img-thumbnail" width="250px"
                        height="150px">
                </div>
                <div class="mt-3 text-white mx-5 text-justify">
                    <h1 class="fw-bold st-font">Hello,</h1>
                    <div class="px-4" style="line-height: 2rem;">
                        <p style="text-indent: 100px;">I am <b class="text-warning">
                                Shahriar Rashid Shawon
                            </b>
                            having 1.5 years of Web Application Development of global businesses, I I offer the
                            technical expertise
                            you are seeking for your Web developer position.
                        </p>
                        <p>
                            Since earning my BSC in Computer Science and Engineering from Eastern University, I have
                            served as a Web
                            Developer at <b class="text-warning">TMSS ICT Ltd</b>, August-2021 to present.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur aut sit
                            dolorum quisquam. Repellat distinctio, nostrum in aliquam itaque dolor cum numquam quaerat
                            eum, deleniti laboriosam architecto ipsam corrupti!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur aspernatur aut sit
                            dolorum quisquam. Repellat distinctio, nostrum.
                        </p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-4 my-2">Hire Me</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-info">Contact</a>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
