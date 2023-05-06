@extends('layout/layout-general')


@section('layoutUI')


    @if ($errors->any())
        @foreach ( $errors->all() as $error )
            <p style="color:red;"> {{ $error }}</p>
        @endforeach
    @endif

    




<div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
            ></div>
            <!-- Col -->
            <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <div class="px-8 mb-4 text-center">
                    <h3 class="pt-4 mb-2 text-2xl">Forgot Your Password?</h3>
                    <p class="mb-4 text-sm text-gray-700">
                        @if (Session::has('error'))
                            <p style="color:red;">{{ Session::get('error') }}</p>
                        @endif

                        @if (Session::has('success'))
                            <p style="color:green;">{{ Session::get('success') }}</p>
                        @endif
                    </p>
                </div>
                <form action="{{ route('forgetpass')}}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            name="email"
                            id="email"
                            type="email"
                            placeholder="Enter Email Address..."
                        />
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Reset Password
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="./register"
                        >
                            Create an Account!
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="./"
                        >
                            Already have an account? Login!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
