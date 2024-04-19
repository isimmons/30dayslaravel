import { z } from "zod";

const jobSchema = z.object({
    title: z.string().min(3),
    salary: z.string(),
});

const form = document.querySelector("#job-form");

form.setAttribute("novalidate", "");

const validateForm = () => {
    const formData = new FormData(form);

    const data = Object.fromEntries(formData.entries());

    console.log("foobarfochizzle: ", data);
};

form.addEventListener("submit", (event) => {
    event.preventDefault();
    validateForm();
});
