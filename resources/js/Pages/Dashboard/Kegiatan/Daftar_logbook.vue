<template>

  <DashboardLayout title="Kegiatan">
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-4">
      <h1 class="text-neutral-gray-5 mb-0">Kegiatan</h1>
    </div>
      <ul class="mt-4">
                    <li >
                      <Link  >Deskripsi</Link>
                    </li>
                   <li >
                      <Link :href="``">Elearning</Link>
                    </li>
                    <li >
                        <Link :href="``" >Eventual</Link>
                    </li>
                    <li class="active">
                        <Link class="active" :href="``">Logbook</Link>
                    </li>
      </ul>
          <section>
      <div class="table-responsive">
        <table class="table mt-3">
          <thead class="table-primary-blue-4">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Peserta</th>
              <th scope="col">Profil</th>
            </tr>
          </thead>
          <tbody>
             <tr v-for="(index,no) in items">
              <th scope="row">{{++no}}</th>
               <td>  <Link :href="`/admin/dashboard/kegiatan/${currentPage}/detail_logbook/${index.id}/halaman/1`">{{index.nama_lengkap}}</Link></td>
                <td>  <Link :href="`/detail/profil/${index.id}`">Lihat profil</Link></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center mt-4">
        <ul class="pagination">
          <li v-if="prev">
            <Link :href="`/admin/dashboard/users/umkm/${prev}`">
              <font-awesome-icon icon="fa-solid fa-chevron-left" class="text-primary-blue-6" />
            </Link>
          </li>
          <li v-if="first">
              <Link :href="`/admin/dashboard/users/umkm/${first}`">{{first}}</Link>
          </li>
          <li v-if="prevBlok">
              <Link :href="`/admin/dashboard/users/umkm/${prevBlok}`">...</Link>
          </li>
          <div v-for="num in paginationNums">
          <li :class="[currentPage == num ? 'active':'']">
              <Link :href="`/admin/dashboard/users/umkm/${num}`">{{num}}</Link>
          </li>
        </div>
        <li v-if="nextBlok">
          <Link :href="`/admin/dashboard/users/umkm/${nextBlok}`">...</Link>
        </li>
        <li v-if="last">
            <Link :href="`/admin/dashboard/users/umkm/${last}`">{{last}}</Link>
        </li>
          <li v-if="next">
            <Link :href="`/admin/dashboard/users/umkm/${next}`">
              <font-awesome-icon icon="fa-solid fa-chevron-right" class="text-primary-blue-6" />
            </Link>
          </li>
        </ul>
      </div>
    </section>
  </DashboardLayout>
</template>

<script>
import DashboardLayout from '../../../Layouts/Dashboard.vue';
import { Link,useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
export default{
   data(){
      return{
        currentPage: document.location.pathname.split('/')[4]
      }
    },
    props:{
      items : Array,
      paginationNums : Array,
      nextBlok:Number,
      prevBlok:Number,
      prev:Number,
      next:Number,
      first:Number,
      last:Number
    },
    components: {
      DashboardLayout,
      Link
    },
}
</script>

<style scoped>

.close{
  border-width: 0px;
  background-color: white;
}

.modal {
  position: fixed; /* Stay in place */
  padding-top: 100px; /* Location of the box */
  left: 0;
  display: block;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.1); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin-top: 3rem;
  margin-left: 25rem;
  padding: 20px;
  border-radius: 25px;
  width: 40%;
  text-align: center;
}
h1 {
  font-size: 2.1rem;
  font-weight: 600;
}
ul {
  display: flex;
  column-gap: 2rem;
  list-style: none;
  padding: 0;
  border-bottom: 1px solid #F0F0F0;
}

ul li {
  cursor: pointer;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;

}
.custom-file-input::before {

  content: '\00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0\00a0Upload Gambar';
  display: inline-block;
  background-color:white;
  background-image:url('../../../assets/icons/upload.png');
  background-repeat: no-repeat;
  background-size: 18px 20px;
  border-radius: 3px;
  padding: 8px;
  background-origin: content-box;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  color:black;
  font-size: 12px;
}

.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

.custom-file-input2::-webkit-file-upload-button {
  visibility: hidden;

}

.custom-file-input2::before {
  content: '\00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0 \00a0  Ambil Gambar';
  display: inline-block;
  background-color:white;
  background-image:url('../../../assets/icons/upload2.png');
  background-repeat: no-repeat;
  background-size: 18px 20px;
  border-radius: 3px;
  padding: 8px;
  background-origin: content-box;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  color:black;
  font-size: 12px;
}

.custom-file-input2:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}

ul li {
  padding-bottom: 0.5rem;
}

ul li a.active {
  border-bottom: 2px solid #398AB9;
  color:  #398ab9;
}

ul li a {
  text-decoration: none;
  font-weight: 600;
  color: black;
}

@media (max-width: 575.98px) {
  ul {
    gap: 1rem;
    flex-direction: column;
  }

}

form section h2 {
  font-size: 1.25rem;
}

.form-control {
  background-color: transparent;
  resize: none;
}
.modal-content{
  text-align: start;
}

textarea::-webkit-scrollbar {
  display: none;
}

.desc_count {
  font-size: 0.75rem;
  font-weight: 400;
  color: #3E4041;
  position: absolute;
  right: 0;
  bottom: -1.5rem;
}

.count_input {
  width: 14rem;
}

.count_input_leading {
  position: absolute;
  right: -3.5rem;
  bottom: 0.5rem;
}

.telp_input .form-control {
  padding-left: 2.5rem !important;
}

.telp_input .telp_leading {
  position: absolute;
  left: 0;
  bottom: 0.5rem;
}

form button {
  padding: 0.75rem 1.5rem;

}

@media (max-width: 575.98px) {
  ul {
    gap: 1rem;
    flex-direction: column;
  }
  .modal-content{
    margin-left: 3rem;
    margin-top: 5rem;
    width: 450px;
  }
}
</style>