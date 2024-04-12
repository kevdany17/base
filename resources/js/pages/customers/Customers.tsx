import React, { useEffect, useState } from "react";
import axios from "axios";
import ReactDOM from "react-dom";
import Personal from "./components/Personal";
import Tax from "./components/Tax";
import User from "./components/User";
import { Customer } from "./Props";
import Step from "./components/Step";
import "./styles.scss";

const app = document.getElementById("r-customers");
const csrf = app?.getAttribute("data-csrf");
const apiToken = app?.getAttribute("data-api");
const edit = app?.getAttribute("data-edit");
const customer = app?.getAttribute("data-customer");

const Customers = () => {
	const [state, setState] = useState<Customer>({
		apiToken: apiToken as string,
		token: csrf as string,
		id: 0,
		first_name: "",
		last_name: "",
		gender: "Hombre",
		address: "",
		phone: "",
		rfc: "",
		reason: "",
		email: "",
		postal_code: "",
		user_id: 0,
		user: "",
		before_user: "",
		password: "",
	});

	useEffect(() => {
		if (edit == "1") {
			try {
				const data: Customer = JSON.parse(customer ?? "{}") as Customer;
				setState((prevState) => {
					return { ...prevState, ...data };
				});
			} catch (error) {}
		}
	}, []);

	const [step, setStep] = useState<number>(1);

	const updateFields = (fields: Partial<Customer>) => {
		setState((prevState) => {
			return { ...prevState, ...fields };
		});
	};

	const handlePrevStep = (): void => {
		if (step > 1) {
			setStep(step - 1);
		}
	};

	const handleNextStep = (): void => {
		if (step < 4) {
			setStep(step + 1);
		}
	};

	const onSubmit = async () => {
		if (edit == "1") {
			await axios
				.put(
					"/admin/customers/" + state.id.toString(),
					{
						_token: state.token,
						first_name: state.first_name,
						last_name: state.last_name,
						gender: state.gender,
						address: state.address,
						phone: state.phone,
						rfc: state.rfc,
						reason: state.reason,
						email: state.email,
						postal_code: state.postal_code,
						user_id: state.user_id,
						user: state.user,
						password: state.password,
					},
					{
						headers: {
							"content-type": "application/json",
						},
					},
				)
				.then((response) => {
					if (response.status == 200) {
						window.location.href = "/admin/customers/";
					}
				})
				.catch();
		} else {
			await axios
				.post(
					"/admin/customers/",
					{
						_token: state.token,
						first_name: state.first_name,
						last_name: state.last_name,
						gender: state.gender,
						address: state.address,
						phone: state.phone,
						rfc: state.rfc,
						reason: state.reason,
						email: state.email,
						postal_code: state.postal_code,
						user: state.user,
						password: state.password,
					},
					{
						headers: {
							"content-type": "application/json",
						},
					},
				)
				.then((response) => {
					if (response.status == 200) {
						window.location.href = "/admin/customers/";
					}
				})
				.catch();
		}
	};

	switch (step) {
		case 1:
			return (
				<>
					<Step step={step} />
					<div className="div__content">
						<Personal
							nextStep={handleNextStep}
							prevStep={handlePrevStep}
							handleChange={updateFields}
							values={state}
						/>
					</div>
				</>
			);
		case 2:
			return (
				<>
					<Step step={step} />
					<div className="div__content">
						<Tax
							nextStep={handleNextStep}
							prevStep={handlePrevStep}
							handleChange={updateFields}
							values={state}
						/>
					</div>
				</>
			);
		case 3:
			return (
				<>
					<Step step={step} />
					<div className="div__content">
						<User
							nextStep={handleNextStep}
							prevStep={handlePrevStep}
							handleChange={updateFields}
							values={state}
						/>
					</div>
				</>
			);
		case 4:
			return (
				<>
					<Step step={step} />
					<div className="div__content">
						<div className="row">
							<div className="col-md-12 text-center">
								<p>
									¿Está seguro de guardar la información del
									cliente?
								</p>
								<button
									className="btn btn-primary"
									onClick={handlePrevStep}
								>
									Anterior
								</button>
								<button
									className="btn btn-primary"
									style={{ marginLeft: "10px" }}
									onClick={onSubmit}
								>
									Guardar
								</button>
							</div>
						</div>
					</div>
				</>
			);
		default:
			return <div></div>;
	}
};
export default Customers;

ReactDOM.render(<Customers />, app);
