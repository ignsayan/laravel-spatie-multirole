<template>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assigned Permissions</h5>
                    <div
                        v-for="permission in activePermissions"
                        :key="permission.id"
                        class="form-check form-switch"
                    >
                        <input
                            checked
                            class="form-check-input"
                            name="permission[]"
                            type="checkbox"
                            v-bind:value="permission.name"
                        />
                        <label class="form-check-label">{{ permission.name }}-user</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Available Permissions</h5>
                    <div
                        v-for="permission in inactivePermissions"
                        :key="permission.id"
                        class="form-check form-switch"
                    >
                        <input
                            class="form-check-input"
                            name="permission[]"
                            type="checkbox"
                            v-bind:value="permission.name"
                        />
                        <label class="form-check-label">{{ permission.name }}-user</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["activePermissions", "inactivePermissions"],
};
</script>
