import React from "react";

const Step = (props: { step: number }) => {
	switch (props.step) {
		case 1:
			return (
				<div className="tabs">
					<div className="tab div__step--active">
						<label>
							{" "}
							<i className="voyager-person"></i> Datos Personales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-receipt"></i> Datos Fiscales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-laptop"></i> Datos de Usuario
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-check"></i> Guardar
							información
						</label>
					</div>
				</div>
			);
		case 2:
			return (
				<div className="tabs">
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-person"></i> Datos Personales
						</label>
					</div>
					<div className="tab div__step--active">
						<label>
							{" "}
							<i className="voyager-receipt"></i> Datos Fiscales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-laptop"></i> Datos de Usuario
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-check"></i> Guardar
							información
						</label>
					</div>
				</div>
			);
		case 3:
			return (
				<div className="tabs">
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-person"></i> Datos Personales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-receipt"></i> Datos Fiscales
						</label>
					</div>
					<div className="tab div__step--active">
						<label>
							{" "}
							<i className="voyager-laptop"></i> Datos de Usuario
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-check"></i> Guardar
							información
						</label>
					</div>
				</div>
			);
		case 4:
			return (
				<div className="tabs">
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-person"></i> Datos Personales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-receipt"></i> Datos Fiscales
						</label>
					</div>
					<div className="tab">
						<label>
							{" "}
							<i className="voyager-laptop"></i> Datos de Usuario
						</label>
					</div>
					<div className="tab div__step--active">
						<label>
							{" "}
							<i className="voyager-check"></i> Guardar
							información
						</label>
					</div>
				</div>
			);
		default:
			return <div></div>;
	}
};

export default Step;
