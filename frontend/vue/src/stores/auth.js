import { defineStore } from 'pinia';
import http, { setAuthToken } from '../api/http';

export const useAuthStore = defineStore('auth', {
  state: () => ({ user: null, token: null, loading: false, error: null }),
  actions: {
    async login(email, password) {
      this.loading = true;
      this.error = null;
      try {
        const { data } = await http.post('/login', { email, password });
        this.token = data.token;
        setAuthToken(this.token);
        this.user = data.user;
      } catch (e) {
        this.error = e.response?.data?.message || 'Błąd logowania';
      } finally {
        this.loading = false;
      }
    },
    async fetchMe() {
      if (!this.token) return;
      const { data } = await http.get('/me');
      this.user = data;
    },
    async logout() {
      try { await http.post('/logout'); } catch {}
      this.user = null;
      this.token = null;
      setAuthToken(null);
    }
  }
});