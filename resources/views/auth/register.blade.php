<x-guest-layout>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        
        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" placeholder="Digite o CEP" :value="old('cep')" required autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

   <!-- ESTADO -->
<div class="mt-4">
    <x-input-label for="estado" :value="__('Estado')" />
    <select id="estado" class="block mt-1 w-full" name="estado" required autocomplete="estado">
        <option value="" selected disabled>Selecione o estado</option>
        <option value="AC">AC - Acre</option>
        <option value="AL">AL - Alagoas</option>
        <option value="AP">AP - Amapá</option>
        <option value="AM">AM - Amazonas</option>
        <option value="BA">BA - Bahia</option>
        <option value="CE">CE - Ceará</option>
        <option value="DF">DF - Distrito Federal</option>
        <option value="ES">ES - Espírito Santo</option>
        <option value="GO">GO - Goiás</option>
        <option value="MA">MA - Maranhão</option>
        <option value="MT">MT - Mato Grosso</option>
        <option value="MS">MS - Mato Grosso do Sul</option>
        <option value="MG">MG - Minas Gerais</option>
        <option value="PA">PA - Pará</option>
        <option value="PB">PB - Paraíba</option>
        <option value="PR">PR - Paraná</option>
        <option value="PE">PE - Pernambuco</option>
        <option value="PI">PI - Piauí</option>
        <option value="RJ">RJ - Rio de Janeiro</option>
        <option value="RN">RN - Rio Grande do Norte</option>
        <option value="RS">RS - Rio Grande do Sul</option>
        <option value="RO">RO - Rondônia</option>
        <option value="RR">RR - Roraima</option>
        <option value="SC">SC - Santa Catarina</option>
        <option value="SP">SP - São Paulo</option>
        <option value="SE">SE - Sergipe</option>
        <option value="TO">TO - Tocantins</option>
    </select>
    <x-input-error :messages="$errors->get('estado')" class="mt-2" />
</div>
     

          <!-- Telefone -->
          <div class="mt-4">
            <x-input-label for="telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="telefone" name="telefone" placeholder="Digite seu telefone" :value="old('telefone')" required autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>  

          <!-- CIDADE -->
          <div class="mt-4">
            <x-input-label for="cidade" :value="__('Cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="cidade" name="cidade" placeholder="Digite sua Cidade" :value="old('cidade')" required autocomplete="cidade" />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

            <!-- CELULAR -->
          <div class="mt-4">
            <x-input-label for="celular" :value="__('Celular')" />
            <x-text-input id="celular" class="block mt-1 w-full" type="celular" name="celular" placeholder="Digite seu celular" :value="old('celular')" required autocomplete="celular" />
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>  
        <!--  APLICANDO A MASCÁRA ATRÁVES DO SCRIPT  -->
        <script>
    $(document).ready(function() {
      $('#cep').mask('00000-000');
    });
  </script>

     
            <!--  APLICANDO A MASCÁRA ATRÁVES DO SCRIPT  -->
            <script>
    $(document).ready(function() {
      $('#telefone').mask('(00) 0000-0000');
    });
  </script>

           <!--  APLICANDO A MASCÁRA ATRÁVES DO SCRIPT  -->
           <script>
    $(document).ready(function() {
      $('#celular').mask('(00) 0 0000-0000');
    });
  </script>

        <!-- Senha -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirmar senha -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
