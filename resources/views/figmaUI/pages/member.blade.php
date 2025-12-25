@extends('figmaUI.layouts.welcome')

@section('title', 'Member Page')

@section('content')
    <section class="max-w-[1250px] mx-auto mt-5 p-4">
        <div x-data="memberModal({{ Js::from($member) }})" class="relative">

            <!-- Grid danh sách thành viên -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <template x-for="(member, index) in members" :key="member.name">
                    <a href="javascript:void(0)" @click="openModal(index)" class="flex flex-col gap-2">
                        <img :src="member.avatar" alt="" class="object-cover h-[300px] w-full">
                        <h1 class="text-2xl font-medium" x-text="member.name"></h1>
                        <h1 x-text="member.position"></h1>
                    </a>
                </template>
            </div>

            <!-- Modal -->
            <div x-show="showModal" x-transition.opacity
                class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
                <div class="bg-white p-6 rounded-xl shadow-lg w-11/12 md:w-1/2 relative" @click.away="closeModal">
                    <!-- Nút đóng -->
                    <button class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-xl" @click="closeModal">
                        <i class="fa-solid fa-x"></i>
                    </button>
                    <div class="absolute bottom-3 right-3 flex gap-4">
                        <button @click="prevMember" class="text-gray-500 hover:text-red-500 text-xl">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button @click="nextMember" class="text-gray-500 hover:text-red-500 text-xl">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                    <!-- Nội dung modal -->
                    <div class="h-auto" x-show="selectedMember">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="col-span-5">
                                <img class="h-[300px] w-auto mx-auto object-cover" :src="selectedMember.avatar" alt="">
                            </div>
                            <div class="flex flex-col col-span-7 gap-3">
                                <h1 class="text-3xl font-semibold mt-4" x-text="selectedMember.name"></h1>
                                <hr class="w-16 border-3 border-red-500">
                                <p class="text-gray-500 leading-relaxed" x-text="selectedMember.graduate"></p>
                                <p class="text-gray-500 leading-relaxed" x-text="selectedMember.join"></p>
                                <p class="text-gray-500 leading-relaxed" x-text="selectedMember.project"></p>
                                <p class="text-gray-500 leading-relaxed" x-text="selectedMember.award"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
<!-- Alpine.js -->
<script>
    function memberModal(member) {
        return {
            showModal: false,
            selectedMember: null,
            members: member,
            openModal(index) {
                this.selectedIndex = index;
                this.selectedMember = this.members[index];
                this.showModal = true;
            },

            closeModal() {
                this.showModal = false;
                this.selectedMember = null;
            },

            nextMember() {
                if (this.selectedIndex < this.members.length - 1) {
                    this.selectedIndex++;
                } else {
                    this.selectedIndex = 0; // quay lại đầu
                }
                this.selectedMember = this.members[this.selectedIndex];
            },

            prevMember() {
                if (this.selectedIndex > 0) {
                    this.selectedIndex--;
                } else {
                    this.selectedIndex = this.members.length - 1; // quay về cuối
                }
                this.selectedMember = this.members[this.selectedIndex];
            }
        };
    }
</script>
