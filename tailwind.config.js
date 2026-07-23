/** Tailwind config — mirrors the former inline cdn.tailwindcss.com config in includes/head.php */
module.exports = {
  content: ['./*.php', './includes/*.php'],
  theme: {
    extend: {
      colors: {
        primary: { DEFAULT: '#ce9b01', hover: '#b88a01', light: '#f5e6b8', dark: '#9d7600', foreground: '#ffffff' },
        secondary: { DEFAULT: '#070D32', light: '#1a2255', dark: '#030618' },
        muted: { DEFAULT: '#f5f5f5', foreground: '#737373' },
        accent: { DEFAULT: '#f5f5f5', foreground: '#171717' },
        input: '#e5e5e5',
        ring: '#ce9b01',
        border: '#e5e5e5',
        foreground: '#0a0a0a',
        background: '#ffffff',
        popover: { DEFAULT: '#ffffff', foreground: '#0a0a0a' },
        destructive: { DEFAULT: '#ef4444', foreground: '#b91c1c' },
        success: { DEFAULT: '#22c55e', foreground: '#166534' },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
      },
      animation: {
        'fade-in': 'fadeIn 0.6s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'slide-down': 'slideDown 0.3s ease-out',
      },
      keyframes: {
        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
        slideUp: { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
        slideDown: { '0%': { opacity: '0', transform: 'translateY(-10px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
      },
    },
  },
};
