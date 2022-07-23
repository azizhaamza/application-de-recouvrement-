<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create User
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <input id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="name" :value="old('name')" required autofocus />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                            <input id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" type="email" name="email" :value="old('email')" required />
                            @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                            <input id="password" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />    
                            @error('password')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password<span class="text-danger">*</span>

                            <input id="password_confirmation" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            type="password"
                            name="password_confirmation" required />
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="user_cin" class="block font-medium text-sm text-gray-700" >CIN</label>
                            <input id="user_cin" class="form-input rounded-md shadow-sm mt-1 block w-full" type="text" name="user_cin" :value="old('user_cin')" required />
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="roles" class="form-input rounded-md shadow-sm mt-1 block w-full">Roles</label>
                            <select name="role_id"  class="form-multiselect block rounded-md shadow-sm mt-1 block w-full">
                                <option value="user" id="user">User</option>
                                <option value="responsable_de_recouvrement" id="responsable">Responsable de recourement </option>                                
                            </select>
                            @error('roles')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" value="Create">
                                
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>