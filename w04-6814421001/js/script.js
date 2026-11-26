document.addEventListener('alpine:init', () => {
    Alpine.data('studentForm', () => ({
        studentName: '',
        studentId: '',
        faculty: '',
        major: '',
        phone: '',
        advisor: '',
        activityDate: '',
        startTime: '',
        endTime: '',
        duration: '',
        activity1: '',
        activity2: '',
        activity3: '',
        image1: null,
        image2: null,

        // --- ใช้ Regex ตรวจสอบข้อความ Error ---
        get nameError() {
            if (this.studentName === '') return 'กรุณากรอกชื่อ-นามสกุล';
            if (/[0-9]/.test(this.studentName)) return 'ชื่อ-นามสกุล ห้ามเป็นตัวเลข';
            return '';
        },
        get idError() {
            if (this.studentId === '') return 'กรุณากรอกรหัสนักศึกษา';
            if (!/^[0-9]{11,}$/.test(this.studentId)) return 'รหัสนักศึกษาต้องเป็นตัวเลข 11 หลักขึ้นไป';
            return '';
        },
        get facultyError() {
            if (this.faculty === '') return 'กรุณาเลือกคณะ';
            return '';
        },
        get majorError() {
            if (this.major === '') return 'กรุณากรอกสาขาวิชา';
            if (/[0-9]/.test(this.major)) return 'สาขาวิชา ห้ามเป็นตัวเลข';
            return '';
        },
        get phoneError() {
            if (this.phone === '') return 'กรุณากรอกเบอร์โทรศัพท์';
            if (!/^[0-9]{10}$/.test(this.phone)) return 'เบอร์โทรศัพท์ต้องเป็นตัวเลข 10 หลัก';
            return '';
        },
        get advisorError() {
            if (this.advisor === '') return 'กรุณาระบุอาจารย์ที่ปรึกษา';
            return '';
        },
        get dateError() {
            if (this.activityDate === '') return 'กรุณาเลือกวันที่';
            return '';
        },
        get startTimeError() {
            if (this.startTime === '') return 'กรุณาระบุเวลาเริ่ม';
            return '';
        },
        get endTimeError() {
            if (this.endTime === '') return 'กรุณาระบุเวลาสิ้นสุด';
            return '';
        },
        get durationError() {
            if (this.duration === '') return 'กรุณาระบุจำนวนชั่วโมง';
            if (Number(this.duration) <= 0) return 'จำนวนชั่วโมงต้องมากกว่า 0';
            return '';
        },
        get activity1Error() {
            if (this.activity1 === '') return 'กรุณากรอกรายละเอียดกิจกรรม';
            return '';
        },

        get isFormValid() {
            return this.nameError === '' && this.idError === '' && this.facultyError === '' && 
                   this.majorError === '' && this.phoneError === '' && this.advisorError === '' && 
                   this.dateError === '' && this.startTimeError === '' && this.endTimeError === '' && 
                   this.durationError === '' && this.activity1Error === '';
        },

        submitForm() {
            if (this.isFormValid) {
                alert('บันทึกข้อมูลสำเร็จ!');
            } else {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                // alert('กรุณากรอกข้อมูลที่มีเครื่องหมาย * ให้ถูกต้อง'); // เปิดใช้ถ้าต้องการเตือนตอนกด Submit
            }
        },

        resetForm() {
            this.studentName = ''; this.studentId = ''; this.faculty = ''; this.major = '';
            this.phone = ''; this.advisor = ''; this.activityDate = ''; this.startTime = '';
            this.endTime = ''; this.duration = ''; this.activity1 = ''; this.activity2 = '';
            this.activity3 = ''; this.image1 = null; this.image2 = null;
            document.getElementById('image1').value = '';
            document.getElementById('image2').value = '';
        }
    }));
});