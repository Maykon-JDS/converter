import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [react()],
    root: "./resources/lib/react",
    build: {
        manifest: true,
    },
    rollupOptions: {
        // overwrite default .html entry
        input: './main.jsx',
      },
    server: {
        port: 8002, // Define a porta desejada
        headers: {
            "Access-Control-Allow-Origin": "*", // Permite todas as origens
            "Access-Control-Allow-Methods": "GET,POST,OPTIONS,DELETE,PUT", // Métodos permitidos
            "Access-Control-Allow-Headers": "Content-Type", // Cabeçalhos permitidos
        },
    },
});
