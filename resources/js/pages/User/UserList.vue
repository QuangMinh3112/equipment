<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";
import UserCreateForm from "./UserCreateForm.vue";
import moment from 'moment';

const users = ref([]);
function getUser() {
    axios.get("/api/user").then((response) => {
        users.value = response.data.data.map(user => ({
            ...user,
            created_at: moment(user.created_at).format('DD/MM/YYYY')
        }));
    });
}
function addNewUser(newUser) {
    users.value.unshift(newUser);
}
onMounted(() => {
    getUser();
});
</script>
<template>
    <UserCreateForm @my-event="addNewUser"></UserCreateForm>
    <div class="card mb-3">
        <div class="card-body">
            <h1 class="">Danh sách tài khoản</h1>
            <form class="">
                <div class="d-flex justify-content-between">
                    <div class="col-6 m-0 p-0">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="mdi mdi-magnify"></span>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nhập tên hoặc tên đăng nhập" />
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-row-reverse">
                        <div class="mx-1">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#createUserModal">
                                <span class="mdi mdi-plus-box-outline"></span>
                                Thêm mới
                            </button>
                        </div>
                        <div class="mx-1">
                            <button type="submit" class="btn btn-inverse-danger">
                                <span class="mdi mdi-trash-can-outline"></span>
                                Xoá
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-0 m-0">
            <table class="table table-hover">
                <thead class="bg-secondary">
                    <tr>
                        <th scope="col">
                            <input type="checkbox" id="myCheckbox" class="custom-checkbox" />
                        </th>
                        <th scope="col"><b>STT</b></th>
                        <th scope="col"><b>Họ và tên</b></th>
                        <th scope="col"><b>Tên đăng nhập</b></th>
                        <th scope="col"><b>Quyền</b></th>
                        <th scope="col"><b>Người cập nhật</b></th>
                        <th scope="col"><b>Thời gian cập nhật</b></th>
                        <th scope="col"><b>Thao tác</b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(data, index) in users" :key="data.id">
                        <td><input type="checkbox" id="myCheckbox" class="custom-checkbox" /></td>
                        <td>{{ index + 1 }}</td>
                        <td>{{ data.full_name }}</td>
                        <td>{{ data.user_name }}</td>
                        <td> {{ data.role ?? 'unknow' }}</td>
                        <td>{{ data.created_by.full_name }}</td>
                        <td>{{ data.created_at }}</td>
                        <td class="col-1">
                            <div class="d-flex">
                                <button class="btn btn-primary btn-sm mx-1">
                                    <span class="mdi mdi-pencil"></span>
                                </button>
                                <button class="btn btn-danger btn-sm mx-1">
                                    <span class="mdi mdi-delete"></span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
