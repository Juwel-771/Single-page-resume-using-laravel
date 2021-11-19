<x-layout>
    <x-slot name='title'>
        Home
    </x-slot>
    <x-slot name='content'>
        <div>
            <div class="text-center my-5">
                <img src="{{ asset('imges/pro.jpg') }}" alt="" class="img-thumbnail" width="200px" height="80px">
            </div>
            <div>
                <h4 class="st-font text-white font-weight-bold" style="font-size: 40px">Hello,</h4>
            </div>
            <div style="line-height: 2rem" class="text-white my-3 text-justify">
                <p style="text-indent: 100px;">Hi I am <b class="text-warning">Md Juwel</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla vitae incidunt harum similique, ullam ipsam itaque beatae perspiciatis qui temporibus?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut iusto laudantium similique praesentium magni, error est voluptas quis asperiores, sequi explicabo nihil, omnis tempore laborum consequatur corporis dignissimos voluptates quae cupiditate nisi eius fugiat dolor iure dolores. Odio omnis pariatur quasi laborum corrupti, dignissimos.lorem30</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum exercitationem aliquid autem beatae rem laudantium, mollitia delectus quas fuga non unde sed voluptas deleniti ratione, distinctio iusto sit explicabo atque? Illum deleniti consequuntur adipisci similique est esse, ratione ad natus fuga praesentium alias, aliquid, eaque veniam aspernatur consectetur voluptatibus eius repellendus tempore debitis incidunt! Minima consectetur voluptatum aperiam, eius saepe quis laudantium dolorum dolor et tempore iste quasi magnam eveniet itaque quae unde voluptas rerum. Laboriosam quae animi impedit reprehenderit.</p>
            </div>
            <div class="text-center py-3">
                <a href="{{ route('contact')}}" class="btn btn-outline-warning mx-3">Hire Me</a>
                <a href="{{ route('contact')}}" class="btn btn-outline-info mx-3">Contact Me</a>
            </div>
        </div>
    </x-slot>
</x-layout>