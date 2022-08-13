<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-3">
            <h1 class="text-warning mb-3 border-botton">CONTACT ME</h1>
            <div class="row text-white mb-3">
                <p class="mx-auto mb-3">
                    Do you have any question? Please do not hesitate to contact.I will come back to
                    you within a matter of hours to help you.
                </p>
                <div class="col-sm-9 mb-3">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName">Your Name </label>
                                <input type="text" class="form-control mt-2" name="name" id="nameId"
                                    placeholder="Enter your name..">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName">Your Email *</label>
                                <input type="email" class="form-control mt-2" name="email" id="emailId"
                                    placeholder="Enter your email.." required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputSubject">Your Subject </label>
                                <input type="text" class="form-control mt-2" name="subject" id="subjectId" placeholder="Enter your subject..">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputTextarea">Your Message * </label>
                                <textarea name="text" class="form-control mt-2" id="textId" cols="30" rows="10" required
                                    placeholder="Enter your message.."></textarea>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary float-end btn-lg" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-solid fa-location-dot fa-2x i-color"></i>
                            <p>Tangail, Mymensingh, Dhaka</p>
                        </li>
                        <li>
                            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>+880 1533965931</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                            <p>shahriar001@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="text-center mb-5">
            <a href="#" target="_blank">
                <i class="fab fa-facebook-f i-color mx-2"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-twitter i-color mx-2"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-linkedin i-color mx-2"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab fa-dribbble i-color mx-2"></i>
            </a>
        </div>
    </x-slot>
</x-layout>
