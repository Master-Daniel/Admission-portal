const subject_input = document.querySelector('.subject'), grade_input = document.querySelector('.grade'), exam = document.getElementById('exam'), waec_grade = ['A1', 'B2', 'C3', 'C4', 'C5'];

let count = 0;

function check_exam_type() {
    switch (exam.value.toLowerCase()) {
        case 'jamb':
            return 'number';
            break;
        case 'utme':
            return 'number';
            break;
        default:
            return 'text';
    }
}

exam.onchange = () => {
    count = 0;
    document.querySelector('.subject_title').innerHTML = `Enter ${exam.value} Subjects`;
    subject_input.innerHTML = `<input name="subject-${count}" placeholder="Enter subject" onkeyup="create_input()" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" id="subject-${count}" class="common-input mb-20 form-control" required="" type="text">`

    grade_input.innerHTML = `<input name="grade-${count}" placeholder="Enter Grade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Grade'" onkeyup="create_input(), calculate_total_credits()" id="grade-${count}" class="common-input mb-20 form-control" required="" type="${check_exam_type()}">`
}

function create_input() {
    for (let i = 0; i <= count; i++) {
        const current_subject = document.querySelector(`#subject-${i}`);
        const current_grade = document.querySelector(`#grade-${i}`);
        if (current_subject.value != '' && current_grade.value != '' && document.querySelector(`#grade-${i + 1}`) == null) {
            const sinput = document.createElement('div'), ginput = document.createElement('div');
            sinput.innerHTML = `<input name="subject-${i + 1}" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" onkeyup="create_input()" id="subject-${i + 1}" class="common-input mb-20 form-control" required="" type="text">`

            ginput.innerHTML = `<input name="grade-${i + 1}" placeholder="Enter Grade" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Grade'" onkeyup="create_input(), calculate_total_credits()" id="grade-${i + 1}" class="common-input mb-20 form-control" required="" type="${check_exam_type()}">`

            subject_input.append(sinput)
            grade_input.append(ginput);
            count++
        }
    }
}

function calculate_total_credits() {
    let total = 0;
    switch (exam.value.toLowerCase()) {
        case 'jamb':
            for (let g = 0; g <= count; g++) {
                if (!isNaN(parseInt(document.querySelector(`#grade-${g}`).value))) {
                    total += parseInt(document.querySelector(`#grade-${g}`).value);
                }
            }
            document.querySelector('#credits').innerHTML = total;
            break;
        case 'wassce':
            for (let g = 0; g <= count; g++) {
                if (waec_grade.includes(document.querySelector(`#grade-${g}`).value)) {
                    total += 1;
                }
            }
            document.querySelector('#credits').innerHTML = total;
            break;
        case 'utme':
            for (let g = 0; g <= count; g++) {
                if (!isNaN(parseInt(document.querySelector(`#grade-${g}`).value))) {
                    total += parseInt(document.querySelector(`#grade-${g}`).value);
                }
            }
            document.querySelector('#credits').innerHTML = total;
            break;
    
        default:
            break;
    }
}