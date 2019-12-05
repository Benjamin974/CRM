<template>
  <v-toolbar>
    <v-toolbar-title>Toolbar Mobile Menu</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn v-for="(item,key) in items" :key="key" :to="item.to">{{ item.title }}</v-btn>
    </v-toolbar-items>

    <v-menu left bottom>
      <template v-slot:activator="{ on }">
        <v-btn icon v-on="on">
          <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
      </template>

      <v-list>
        <v-list-item v-for="(item,key) in items" :key="key" :to="item.to">
          <v-list-item-title>{{ item.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </v-toolbar>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { title: "Home", to: "/" },
        { title: "About", to: "/about" },
        { title: "Client", to: "/client" }
      ]
    };
  }
};
</script>