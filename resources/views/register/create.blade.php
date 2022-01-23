<x-layout>
    <x-slot name="content">
        <section class="px-4 py-5">
            <main class="mw-50 mx-auto bg-light p-5 rounded-lg border-primary">
                <h1 class="text-bold text-xl-center ">Cadastrar!</h1>
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label class="block mb-2 text-uppercase font-weight-bold text-small" for="name">
                            Nome
                        </label>
                        <input class="border border-primary p-2 w-100"
                               type="text"
                               name="name"
                               id="name"
                               value="{{old('name')}}"
                               required
                        >

                        @error('name')
                        <p class="text-danger error text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="block mb-2 text-uppercase font-weight-bold text-small" for="username">
                            Username
                        </label>
                        <input class="border border-primary p-2 w-100"
                               type="text"
                               name="username"
                               id="username"
                               value="{{old('username')}}"
                               required
                        >
                        @error('username')
                        <p class="text-danger error text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="block mb-2 text-uppercase font-weight-bold text-small" for="email">
                            E-mail
                        </label>
                        <input class="border border-primary p-2 w-100"
                               type="email"
                               name="email"
                               id="email"
                               value="{{old('email')}}"
                               required
                        >
                        @error('email')
                        <p class="text-danger error text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="block mb-2 text-uppercase font-weight-bold text-small" for="password">
                            Palavra-passe
                        </label>
                        <input class="border border-primary p-2 w-100"
                               type="password"
                               name="password"
                               id="password"
                               required
                        >
                        @error('password')
                        <p class="text-danger error text-xs">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit"
                                class="bg-primary text-white rounded py-2 px-4 hover:bg-primary">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </main>

        </section>
    </x-slot>
</x-layout>


