<template>
    <div class="row mb-3">
        <div class="col-md-12">
            <select
                id="role"
                class="form-control"
                name="role"
                required
                @change="changeRole()"
            >
                <option value="">Choose any role from the dropdown</option>
                <option
                    v-for="role in roles"
                    :key="role.id"
                    v-bind:value="role.id"
                >
                    Selected role as
                    {{ role.name.charAt(0).toUpperCase() + role.name.slice(1) }}
                </option>
            </select>
        </div>
    </div>
    <Permissions
        :activePermissions="this.activePermissions"
        :inactivePermissions="this.inactivePermissions"
    />
</template>

<script>
import Permissions from "./Permissions.vue";

export default {
    components: { Permissions },
    data() {
        return {
            activePermissions: [],
            inactivePermissions: [],
            roles: [],
        };
    },
    mounted() {
        axios.get(route("roles")).then((response) => {
            this.roles = response.data;
        });
    },
    methods: {
        changeRole() {
            let roleId = document.getElementById("role").value;
            axios.get(route("permissions", roleId)).then((response) => {
                this.activePermissions = response.data.active.permissions;
                this.inactivePermissions = response.data.inactive;
            });
        },
    },
};
</script>
