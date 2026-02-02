<script setup lang="ts">
import {
  Target,
  PieChart,
  BarChart3,
  Shield,
  Smartphone,
  Clock,
} from "lucide-vue-next";
// import ThemeToggle from "../components/ThemeToggle.vue";

// Define props if you want to pass an event handler or data from the parent
// In Inertia, navigation is usually handled via <Link> or `router.visit`
// For this standalone component, we'll emit an event or just use a placeholder function
const emit = defineEmits(["getStarted"]);

const onGetStarted = () => {
  emit("getStarted");
};
</script>

<template>
  <div
    class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-colors font-sans"
  >
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-16">
      <nav class="flex justify-between items-center mb-16">
        <div class="flex items-center gap-2">
          <Target class="w-8 h-8 text-indigo-600 dark:text-indigo-400" />
          <span class="text-2xl text-indigo-600 dark:text-indigo-400 font-bold"
            >Money Goals</span
          >
        </div>
        <div class="flex items-center gap-3">
          <ThemeToggle />
          <button
            @click="onGetStarted"
            class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 transition-colors font-medium"
          >
            Começar Agora
          </button>
        </div>
      </nav>

      <div class="text-center max-w-4xl mx-auto mb-20">
        <h1
          class="text-6xl mb-6 text-gray-900 dark:text-white font-bold leading-tight"
        >
          Controle suas finanças de forma inteligente
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
          Gerencie suas receitas e despesas, visualize gráficos detalhados e
          tome decisões financeiras mais conscientes
        </p>
        <button
          @click="onGetStarted"
          class="px-8 py-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 transition-colors text-lg font-semibold"
        >
          Experimente Gratuitamente
        </button>
      </div>

      <!-- Features Grid -->
      <div
        class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-20"
      >
        <div
          class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm transition-colors"
        >
          <div
            class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4"
          >
            <PieChart class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
          </div>
          <h3 class="text-xl mb-3 text-gray-900 dark:text-white font-semibold">
            Gráficos Interativos
          </h3>
          <p class="text-gray-600 dark:text-gray-300">
            Visualize suas finanças com gráficos de pizza, barras e linhas para
            entender melhor seus gastos
          </p>
        </div>

        <div
          class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm transition-colors"
        >
          <div
            class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4"
          >
            <BarChart3 class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
          </div>
          <h3 class="text-xl mb-3 text-gray-900 dark:text-white font-semibold">
            Análise Detalhada
          </h3>
          <p class="text-gray-600 dark:text-gray-300">
            Acompanhe suas receitas e despesas por categoria e período de tempo
          </p>
        </div>

        <div
          class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm transition-colors"
        >
          <div
            class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center mb-4"
          >
            <Shield class="w-6 h-6 text-indigo-600 dark:text-indigo-400" />
          </div>
          <h3 class="text-xl mb-3 text-gray-900 dark:text-white font-semibold">
            Dados Seguros
          </h3>
          <p class="text-gray-600 dark:text-gray-300">
            Seus dados financeiros são armazenados com segurança e privacidade
          </p>
        </div>
      </div>

      <!-- Benefits Section -->
      <div
        class="bg-white dark:bg-gray-800 rounded-2xl p-12 max-w-6xl mx-auto transition-colors shadow-sm"
      >
        <h2
          class="text-4xl text-center mb-12 text-gray-900 dark:text-white font-bold"
        >
          Por que usar o Money Goals?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="flex gap-4">
            <div
              class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center flex-shrink-0"
            >
              <Clock class="w-5 h-5 text-green-600 dark:text-green-400" />
            </div>
            <div>
              <h4
                className="text-lg mb-2 text-gray-900 dark:text-white font-semibold"
              >
                Economia de Tempo
              </h4>
              <p class="text-gray-600 dark:text-gray-300">
                Registre suas transações em segundos e tenha relatórios
                instantâneos
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div
              class="w-10 h-10 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center flex-shrink-0"
            >
              <Smartphone class="w-5 h-5 text-blue-600 dark:text-blue-400" />
            </div>
            <div>
              <h4
                className="text-lg mb-2 text-gray-900 dark:text-white font-semibold"
              >
                Acesso Fácil
              </h4>
              <p class="text-gray-600 dark:text-gray-300">
                Acesse suas finanças de qualquer dispositivo, a qualquer momento
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div
              class="w-10 h-10 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center flex-shrink-0"
            >
              <Target class="w-5 h-5 text-purple-600 dark:text-purple-400" />
            </div>
            <div>
              <h4
                className="text-lg mb-2 text-gray-900 dark:text-white font-semibold"
              >
                Melhores Decisões
              </h4>
              <p class="text-gray-600 dark:text-gray-300">
                Tenha insights claros sobre seus hábitos financeiros e melhore
                sua saúde financeira
              </p>
            </div>
          </div>

          <div class="flex gap-4">
            <div
              class="w-10 h-10 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center flex-shrink-0"
            >
              <BarChart3 class="w-5 h-5 text-orange-600 dark:text-orange-400" />
            </div>
            <div>
              <h4
                className="text-lg mb-2 text-gray-900 dark:text-white font-semibold"
              >
                Metas Claras
              </h4>
              <p class="text-gray-600 dark:text-gray-300">
                Defina e acompanhe suas metas financeiras com facilidade
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-20 pb-16">
        <h2 class="text-4xl mb-4 text-gray-900 dark:text-white font-bold">
          Pronto para começar?
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
          Crie sua conta gratuita e comece a gerenciar suas finanças hoje mesmo
        </p>
        <button
          @click="onGetStarted"
          class="px-8 py-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 transition-colors text-lg font-semibold"
        >
          Criar Conta Grátis
        </button>
      </div>
    </div>
  </div>
</template>
