<script setup>
import { reactive } from 'vue';
import axios from 'axios';
const form = reactive({
    full_name: '',
    user_name: '',
    date_of_birth: '',
    identity_card: '',
    address: '',
    phone_number: '',
    account_code: '',
    role: '',
    email: '',
    password: '',
})
const createUser = () => {
    axios.post('/api/user/store', {
        _method: 'POST',
        full_name: form.full_name,
        user_name: form.user_name,
        date_of_birth: form.date_of_birth,
        identity_card: form.identity_card,
        address: form.address,
        phone_number: form.phone_number,
        account_code: form.account_code,
        role: form.role,
        email: form.email,
        password: form.password
    })
        .then(response => {
            console.log(response.data);
            Object.keys(form).forEach(key => {
                form[key] = '';
            });
            $this.emit('addNewUser', response.data)
        }).catch(error => {
            console.error(error);
        })
}

</script>

<template>
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="exampleModalLabel">Thêm mới tài khoản</h4>
                </div>
                <div class="modal-body">
                    <form autocomplete="off">
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <label class="form-label">Họ & tên</label>
                                <input v-model="form.full_name" type="text" class="form-control" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Mã nhân viên</label>
                                <input v-model="form.account_code" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <label class="form-label">Tên đăng nhập</label>
                                <input v-model="form.user_name" type="text" class="form-control" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Mật khẩu</label>
                                <input v-model="form.password" type="password" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <label class="form-label">Email</label>
                                <input v-model="form.email" type="text" class="form-control" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Số điện thoại
                                </label>
                                <input v-model="form.phone_number" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <label class="form-label">CCCD</label>
                                <input v-model="form.identity_card" type="text" class="form-control" />
                            </div>
                            <div class="mb-3 col-6">
                                <label class="form-label">Ngày sinh
                                </label>
                                <input v-model="form.date_of_birth" type="date" class="form-control" />
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 col-6">
                                <label class="form-label">Địa chỉ</label>
                                <input v-model="form.address" type="text" class="form-control" />
                            </div>
                            <div class="mb-3 col-6">
                                <label for="">Quyền hạn</label>
                                <select v-model="form.role" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="0">Nhân viên</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Đóng
                    </button>
                    <button type="button" class="btn btn-success" @click="createUser">Thêm mới</button>
                </div>
            </div>
        </div>
    </div>
</template>
