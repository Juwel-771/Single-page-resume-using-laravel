<x-layout>
    <x-slot name='title'>
        Contact
    </x-slot>
    <x-slot name='content'>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="text-info mt-5 font-weight-bold" style="font-size: 35px">CONTACT US</h4>
                    <hr style="background-color: aqua;">
                </div>
            </div>
            <div class="row">
                <div class="col my-4">
                    <p class="text-white">Do you have any question? Please let me know. I will come back to you within a
                        matter of hours to help you.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <form action="">
                        <div class="form-group">
                            <label for="name" class="text-white">Your Name</label>
                            <input type="name" class="form-control" id="name" aria-describedby="name">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form action="">
                        <div class="form-group">
                            <label for="mail" class="text-white">Your E-mail</label>
                            <input type="email" class="form-control" id="mail" aria-describedby="mail">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 text-center mt-3">
                    <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                    <p class="text-white">Agrabad, Chittagong, Bangladesh.</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-8">
                    <form>
                        <div class="from-group">
                            <label for="subject" class="text-white">Subject</label>
                            <input type="subject" name="subject" id="subject" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 text-center">
                    <i class="fas fa-phone fa-2x i-color mt-3"></i>
                    <p class="text-white">+880-15334322</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form>
                        <div class="from-group">
                            <label for="messaage" class="text-white">Messaage</label>
                            <input type="messaage" name="messaage" id="messaage" class="form-control py-5">
                        </div>
                    </form>
                </div>
                <div class="col-sm-4 text-center">
                    <i class="fas fa-envelope fa-2x i-color mt-5"></i>
                    <p class="text-white">example@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col my-4">
                    <button type="button" class="btn btn-info px-3">Send</button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col mx-3">
                    <a href="#" target="_blank"><i class="fab fa-twitter fa-2x i-color"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x i-color mx-3"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram fa-2x i-color"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-dribbble fa-2x i-color mx-3"></i></a>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>
