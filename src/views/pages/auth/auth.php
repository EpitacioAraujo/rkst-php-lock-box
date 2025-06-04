<div class="relative min-h-screen">
    <!-- Fundos coloridos absolutos -->
    <div class="absolute inset-0 flex">
        <div class="w-1/2"></div>
        <div class="w-1/2 bg-white"></div>
    </div>

    <!-- Container principal com largura máxima -->
    <div class="relative max-w-screen-lg mx-auto py-8">
        <div class="flex flex-wrap px-3 -mx-4">
            <!-- Coluna esquerda -->
            <div class="
                h-screen md:w-1/2 px-4 -mt-10 md:mb-0 
                flex flex-col items-start justify-center
                gap-2
            ">
                <p>Bem vindo ao</p>

                <a href="/">
                    <h1 class="text-7xl font-bold">Lock box</h1>
                </a>


                <p class="py-6">
                    Onde você guarda <strong class="text-2xl">tudo</strong> com segurança
                </p>
            </div>

            <!-- Coluna direita -->
            <div class="w-full md:w-1/2 px-3 flex flex-col justify-center -mt-10">
                <?php if ($action === 'signin'): ?>
                    <?= render('pages/auth/partials/formSignIn') ?>
                <?php else: ?>
                    <?= render('pages/auth/partials/formSignUp') ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<!-- <div class="h-[100vh] w-full flex">

    <div class="flex-[1] flex justify-end items-center">
        <div class="w-full max-w-md p-3 bg-red-500">
            
        </div>
    </div>

    <div class="flex-[1] bg-white">
        <div class="max-w-md p-3">

        </div>
    </div>
</div> -->