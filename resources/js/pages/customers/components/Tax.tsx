import React, { SyntheticEvent } from "react";
import { IProps } from "../Props";

const Tax = (props: IProps) => {
	const nextStep = (e: SyntheticEvent) => {
		e.preventDefault();
		props.nextStep();
	};

	const prevStep = () => {
		props.prevStep();
	};

	return (
		<form onSubmit={nextStep}>
			<div className="row">
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="rfc" className="form-label">
							RFC
						</label>
						<input
							type="text"
							className="form-control"
							name="rfc"
							id="rfc"
							placeholder="Rfc"
							value={props.values.rfc}
							onChange={(e) =>
								props.handleChange({ rfc: e.target.value })
							}
							maxLength={13}
							pattern="^[A-Z]{3,4}(\d{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01])[A-Z0-9]{2}\d{1}$"
							title="El RFC debe tener 12 o 13 dígitos y seguir el formato válido para RFCs en México"
						/>
					</div>
				</div>
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="reason" className="form-label">
							Nombre o Rázon social (sin régimen capital)
						</label>
						<input
							type="text"
							className="form-control"
							name="reason"
							id="reason"
							placeholder="Razón social"
							value={props.values.reason}
							onChange={(e) =>
								props.handleChange({ reason: e.target.value })
							}
							maxLength={100}
						/>
					</div>
				</div>
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="email" className="form-label">
							Correo electrónico
						</label>
						<input
							type="email"
							className="form-control"
							name="email"
							id="email"
							placeholder="example@example.com"
							value={props.values.email}
							onChange={(e) =>
								props.handleChange({ email: e.target.value })
							}
							maxLength={80}
							pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
						/>
					</div>
				</div>
				<div className="col-md-6">
					<div className="mb-3">
						<label htmlFor="postal_code" className="form-label">
							Código Postal
						</label>
						<input
							type="text"
							className="form-control"
							name="postal_code"
							id="postal_code"
							placeholder="C.P."
							value={props.values.postal_code}
							onChange={(e) =>
								props.handleChange({
									postal_code: e.target.value,
								})
							}
							maxLength={10}
							pattern="[0-9]{5}"
							title="El código postal debe tener 5 dígitos numéricos"
						/>
					</div>
				</div>
				<div className="col-md-12 text-center">
					<button className="btn btn-primary" onClick={prevStep}>
						Anterior
					</button>
					<button
						type="submit"
						className="btn btn-primary"
						style={{ marginLeft: "10px" }}
					>
						Siguiente
					</button>
				</div>
			</div>
		</form>
	);
};

export default Tax;
